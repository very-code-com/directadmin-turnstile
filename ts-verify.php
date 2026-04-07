<?php
/**
 * Copyright 2026 Emilian Scibisz
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
/**
 * Cloudflare Turnstile - Server-side token verification endpoint
 * Part of DirectAdmin Turnstile Plugin
 *
 * Deploy to the DA hostname webroot (/var/www/html/) or any domain with valid SSL.
 * Called from: DA login page (cross-origin)
 *
 * On successful verification, creates a temp file in /tmp/da_turnstile/
 * keyed by SHA256(client_ip) — checked by session_create_pre hook.
 */

// CORS — dynamically allow requests from the DA panel
// Detect DA hostname and port for automatic CORS setup
$daConfFile = '/usr/local/directadmin/conf/directadmin.conf';
$daHostname = '';
$daPort = '2222';
if (file_exists($daConfFile) && is_readable($daConfFile)) {
    foreach (file($daConfFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (strpos($line, 'servername=') === 0) $daHostname = trim(substr($line, 11));
        if (strpos($line, 'port=') === 0) $daPort = trim(substr($line, 5));
    }
}

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
$allowed = false;

if ($origin !== '') {
    // Allow origin if it matches the DA hostname (any port)
    if ($daHostname && preg_match('#^https://' . preg_quote($daHostname, '#') . '(:\d+)?$#', $origin)) {
        $allowed = true;
    }
    // Also allow any subdomain pattern (for setups with multiple hostnames)
    if (!$allowed && preg_match('#^https://[a-z0-9.-]+:\d+$#', $origin)) {
        $parsed = parse_url($origin);
        if (isset($parsed['host']) && $parsed['host'] === ($daHostname ?: $parsed['host'])) {
            $allowed = true;
        }
    }
    // Fallback: allow same server IP origins
    if (!$allowed) {
        $serverIp = $_SERVER['SERVER_ADDR'] ?? '';
        if ($serverIp && strpos($origin, $serverIp) !== false) {
            $allowed = true;
        }
    }
}

if ($allowed) {
    header("Access-Control-Allow-Origin: {$origin}");
}

header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Handle preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// Read plugin config — try multiple locations (different PHP-FPM pools have different restrictions)
$confPaths = [
    '/var/www/.turnstile.conf',
    '/tmp/da_turnstile_conf',
    '/usr/local/directadmin/plugins/turnstile/conf/turnstile.conf',
];

// Also try DA admin user's home dir
if ($daHostname) {
    $adminUser = @trim(shell_exec("ls /usr/local/directadmin/data/admin/ 2>/dev/null | head -1"));
    if ($adminUser) {
        array_splice($confPaths, 2, 0, ["/home/{$adminUser}/.turnstile.conf"]);
    }
}

$conf = [];
foreach ($confPaths as $confFile) {
    if (file_exists($confFile) && is_readable($confFile)) {
        foreach (file($confFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] === '#') continue;
            $parts = explode('=', $line, 2);
            if (count($parts) === 2) $conf[trim($parts[0])] = trim($parts[1]);
        }
        break;
    }
}

$secretKey = $conf['SECRET_KEY'] ?? '';
if (empty($secretKey)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Plugin not configured']);
    exit;
}

$enabled = $conf['ENABLED'] ?? 'yes';
if ($enabled !== 'yes') {
    // Plugin disabled — auto-pass
    echo json_encode(['success' => true, 'note' => 'Turnstile disabled']);
    exit;
}

// Get token from POST
$token = trim($_POST['token'] ?? '');
if (empty($token)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Missing token']);
    exit;
}

// Verify with Cloudflare
$clientIp = $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['HTTP_X_REAL_IP']
    ?? $_SERVER['REMOTE_ADDR']
    ?? '';

// If behind Cloudflare proxy, get the real IP
if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $clientIp = $_SERVER['HTTP_CF_CONNECTING_IP'];
}

$ch = curl_init('https://challenges.cloudflare.com/turnstile/v0/siteverify');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query([
        'secret'   => $secretKey,
        'response' => $token,
        'remoteip' => $clientIp,
    ]),
    CURLOPT_TIMEOUT        => 10,
]);

$result  = curl_exec($ch);
$curlErr = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($curlErr || $result === false) {
    // Cloudflare unreachable — fail-open: write verification anyway
    $failOpen = ($conf['FAIL_OPEN'] ?? 'yes') === 'yes';
    if ($failOpen) {
        writeVerification($clientIp);
        echo json_encode(['success' => true, 'note' => 'Cloudflare unreachable, fail-open']);
    } else {
        http_response_code(502);
        echo json_encode(['success' => false, 'error' => 'Verification service unavailable']);
    }
    exit;
}

$data = json_decode($result, true);

if (!empty($data['success'])) {
    writeVerification($clientIp);
    echo json_encode(['success' => true]);
} else {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'error' => $data['error-codes'][0] ?? 'Verification failed',
    ]);
}

/**
 * Write a verification marker file for the client IP.
 * The session_create_pre hook checks for this file.
 */
function writeVerification(string $ip): void
{
    $dir = '/tmp/da_turnstile';
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    // Clean old files (> 10 min)
    foreach (glob("{$dir}/*") as $file) {
        if (filemtime($file) < time() - 600) {
            unlink($file);
        }
    }

    $hash = hash('sha256', $ip);
    file_put_contents("{$dir}/{$hash}", $ip . "\n" . time());
}
