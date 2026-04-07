#!/bin/bash
# Copyright 2026 Emilian Scibisz
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
# DirectAdmin Turnstile Plugin — Install Script
set -e

PLUGIN_DIR="/usr/local/directadmin/plugins/turnstile"
DA_CONF="/usr/local/directadmin/conf/directadmin.conf"

# Detect DA hostname
DA_HOSTNAME=$(grep "^servername=" "$DA_CONF" 2>/dev/null | cut -d= -f2)
DA_HOSTNAME=${DA_HOSTNAME:-$(hostname -f)}

echo "=== Installing Cloudflare Turnstile Plugin ==="
echo "    DA hostname: $DA_HOSTNAME"

# 1. Set permissions
chmod 755 "$PLUGIN_DIR/scripts/"*.sh
chmod 755 "$PLUGIN_DIR/hooks/session_create_pre/turnstile.sh"
chmod 755 "$PLUGIN_DIR/admin/index.html"
chmod 660 "$PLUGIN_DIR/conf/turnstile.conf"
chmod 750 "$PLUGIN_DIR/conf/"
chmod 644 "$PLUGIN_DIR/plugin.conf"
echo "[1/4] Permissions set"

# 2. Deploy ts-verify.php
DA_WEBROOT="/var/www/html"
if [ -d "$DA_WEBROOT" ]; then
    cp "$PLUGIN_DIR/ts-verify.php" "$DA_WEBROOT/ts-verify.php"
    chmod 644 "$DA_WEBROOT/ts-verify.php"
    echo "[2/4] Verification endpoint deployed to $DA_WEBROOT/ts-verify.php"
else
    echo "[2/4] WARNING: $DA_WEBROOT not found — deploy ts-verify.php manually"
fi

# 3. Patch login page (assets/index.html + login.html)
bash "$PLUGIN_DIR/scripts/patch_login.sh"
echo "[3/4] Login page patched"

# 4. Create verification temp directory
mkdir -p /tmp/da_turnstile
chmod 1777 /tmp/da_turnstile
echo "[4/4] Verification directory created"

echo ""
echo "=== Installation complete ==="
echo ""
echo "Next steps:"
echo "  1. Go to DirectAdmin → Plugins → Cloudflare Turnstile"
echo "  2. Select Production mode and enter your Turnstile keys"
echo "  3. Click Save"
echo ""
echo "Or use Sandbox mode first to test without real keys."
echo "Current config: $PLUGIN_DIR/conf/turnstile.conf"
