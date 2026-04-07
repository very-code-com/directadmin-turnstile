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
# DirectAdmin Turnstile Plugin — Uninstall Script
set -e

PLUGIN_DIR="/usr/local/directadmin/plugins/turnstile"
BACKUP="$PLUGIN_DIR/conf/login.html.original"
LOGIN="/usr/local/directadmin/data/skins/evolution/login.html"

echo "=== Uninstalling Cloudflare Turnstile Plugin ==="

# 1. Restore original login.html
if [ -f "$BACKUP" ]; then
    cp "$BACKUP" "$LOGIN"
    echo "[1/4] Original login.html restored"
else
    echo "[1/4] No backup found — login.html unchanged"
fi

# 2. Remove verification endpoint from DA hostname webroot
if [ -f "/var/www/html/ts-verify.php" ]; then
    rm -f "/var/www/html/ts-verify.php"
    echo "[2/4] Verification endpoint removed from /var/www/html/"
else
    echo "[2/4] No verification endpoint found in /var/www/html/"
fi

# 3. Clean temp/sync files
rm -rf /tmp/da_turnstile
rm -f /tmp/da_turnstile_conf
rm -f /var/www/.turnstile.conf
echo "[3/4] Temp and sync files cleaned"

# 4. Remove hook
echo "[4/4] Hook will be removed with plugin directory"

echo ""
echo "=== Uninstall complete ==="
echo "Plugin directory preserved at: $PLUGIN_DIR"
echo "To fully remove: rm -rf $PLUGIN_DIR"
