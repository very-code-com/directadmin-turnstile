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
 * Cloudflare Turnstile — English (en)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA protection for DirectAdmin login page',
    'mode' => 'Mode',
    'mode_prod' => 'Production',
    'mode_sandbox' => 'Sandbox (testing)',
    'mode_off' => 'Disabled',
    'mode_prod_desc' => 'Active protection with your own Cloudflare keys',
    'mode_sandbox_desc' => 'Cloudflare test keys — widget visible but always passes',
    'mode_off_desc' => 'Turnstile disabled — no CAPTCHA protection',
    'api_keys' => 'API Keys',
    'api_keys_desc' => 'Get your keys from',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Public key — visible in page source',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Private key — used for server-side verification',
    'advanced' => 'Advanced',
    'token_ttl' => 'Token TTL (seconds)',
    'token_ttl_hint' => 'How long the verification remains valid',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Yes — won\'t lock you out if CF is down',
    'fail_open_no' => 'No — more restrictive',
    'fail_open_hint' => 'Allow login when Cloudflare is unreachable',
    'save' => 'Save configuration',
    'status_active' => 'Production',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Disabled',
    'login_patch' => 'Login page patch',
    'active_verifications' => 'Active verifications',
    'how_it_works' => 'How it works',
    'step1' => 'User opens the DA login page → Turnstile widget loads automatically',
    'step2' => 'Cloudflare verifies the user (invisible challenge or interactive)',
    'step3' => 'Token is sent to the verification endpoint on <code>%s</code>',
    'step4' => 'Server verifies the token with Cloudflare API and saves IP approval',
    'step5' => 'Hook <code>session_create_pre</code> checks approval before session creation',
    'msg_saved' => 'Configuration saved successfully.',
    'msg_keys_required' => 'Both keys (Site Key and Secret Key) are required in production mode.',
    'msg_disabled' => 'Turnstile disabled. Original login page restored.',
    'msg_sandbox' => 'Sandbox mode active — using Cloudflare test keys.',
];
