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
# Patches the DirectAdmin Evolution skin to inject Cloudflare Turnstile widget
# Evolution uses assets/index.html as the SPA entry point (not login.html directly)

CONF="/usr/local/directadmin/plugins/turnstile/conf/turnstile.conf"
PLUGIN_DIR="/usr/local/directadmin/plugins/turnstile"
DA_SKIN="/usr/local/directadmin/data/skins/evolution"

# Target: assets/index.html (the actual served file for /evo/login)
LOGIN="$DA_SKIN/assets/index.html"
BACKUP="$PLUGIN_DIR/conf/index.html.original"

# Also patch login.html for non-Evolution skins (fallback)
LOGIN_FALLBACK="$DA_SKIN/login.html"
BACKUP_FALLBACK="$PLUGIN_DIR/conf/login.html.original"

# Read config
source_conf() {
    while IFS='=' read -r key val; do
        key=$(echo "$key" | xargs)
        val=$(echo "$val" | xargs)
        [[ -z "$key" || "$key" == \#* ]] && continue
        export "$key=$val"
    done < "$CONF"
}

source_conf

if [ "$ENABLED" != "yes" ]; then
    # If disabled, restore originals
    [ -f "$BACKUP" ] && cp "$BACKUP" "$LOGIN" && echo "Turnstile disabled — restored original assets/index.html"
    [ -f "$BACKUP_FALLBACK" ] && cp "$BACKUP_FALLBACK" "$LOGIN_FALLBACK" && echo "Turnstile disabled — restored original login.html"
    exit 0
fi

if [ -z "$SITE_KEY" ]; then
    echo "ERROR: SITE_KEY not set in $CONF"
    exit 1
fi

# Detect DA hostname for verification endpoint
DA_HOSTNAME=$(grep "^servername=" /usr/local/directadmin/conf/directadmin.conf 2>/dev/null | cut -d= -f2)
DA_HOSTNAME=${DA_HOSTNAME:-$(hostname -f)}

# The Turnstile injection block
TURNSTILE_JS=$(cat <<'JSEOF'
    <!-- Cloudflare Turnstile Plugin -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit" async defer></script>
    <script>
    (function() {
        const SITE_KEY = '__TURNSTILE_SITE_KEY__';
        const VERIFY_URL = '__VERIFY_URL__';
        let tsVerified = false;
        let tsToken = null;
        let widgetInjected = false;

        function injectTurnstile() {
            if (widgetInjected) return;
            const loginForm = document.getElementById('LoginForm');
            if (!loginForm) return;
            const submitBtn = loginForm.querySelector('button[type="submit"], .Button');
            if (!submitBtn) return;

            widgetInjected = true;

            // Create Turnstile container
            const tsContainer = document.createElement('div');
            tsContainer.id = 'ts-widget-wrap';
            tsContainer.style.cssText = 'margin: 16px 0; display: flex; flex-direction: column; align-items: center; gap: 8px;';

            const tsWidget = document.createElement('div');
            tsWidget.id = 'ts-widget';
            tsContainer.appendChild(tsWidget);

            // Status message
            const tsStatus = document.createElement('div');
            tsStatus.id = 'ts-status';
            tsStatus.style.cssText = 'font-size: 13px; color: #888; text-align: center; min-height: 20px;';
            tsContainer.appendChild(tsStatus);

            // Insert before submit button's parent
            const btnParent = submitBtn.closest('.Box__Submit') || submitBtn.parentElement;
            btnParent.parentElement.insertBefore(tsContainer, btnParent);

            // Disable submit button initially
            submitBtn.setAttribute('disabled', 'disabled');
            submitBtn.style.opacity = '0.5';
            submitBtn.style.cursor = 'not-allowed';

            // Render Turnstile when API is ready
            function renderWidget() {
                if (typeof turnstile === 'undefined') {
                    setTimeout(renderWidget, 200);
                    return;
                }
                turnstile.render('#ts-widget', {
                    sitekey: SITE_KEY,
                    theme: 'dark',
                    callback: function(token) {
                        tsToken = token;
                        tsStatus.textContent = 'Verifying...';
                        tsStatus.style.color = '#eab308';
                        verifyToken(token, submitBtn, tsStatus);
                    },
                    'error-callback': function() {
                        tsStatus.textContent = 'Turnstile error — please refresh the page';
                        tsStatus.style.color = '#ef4444';
                    },
                    'expired-callback': function() {
                        tsVerified = false;
                        submitBtn.setAttribute('disabled', 'disabled');
                        submitBtn.style.opacity = '0.5';
                        submitBtn.style.cursor = 'not-allowed';
                        tsStatus.textContent = 'Token expired — re-verifying...';
                        tsStatus.style.color = '#eab308';
                        turnstile.reset('#ts-widget');
                    }
                });
            }
            renderWidget();

            // Intercept form submission
            submitBtn.addEventListener('click', function(e) {
                if (!tsVerified) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    tsStatus.textContent = 'Please complete Turnstile verification';
                    tsStatus.style.color = '#ef4444';
                    return false;
                }
            }, true);
        }

        function verifyToken(token, submitBtn, tsStatus) {
            fetch(VERIFY_URL, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'token=' + encodeURIComponent(token)
            })
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data.success) {
                    tsVerified = true;
                    submitBtn.removeAttribute('disabled');
                    submitBtn.style.opacity = '1';
                    submitBtn.style.cursor = 'pointer';
                    tsStatus.textContent = '✓ Verified';
                    tsStatus.style.color = '#22c55e';
                } else {
                    tsStatus.textContent = 'Verification failed: ' + (data.error || 'unknown');
                    tsStatus.style.color = '#ef4444';
                    if (typeof turnstile !== 'undefined') turnstile.reset('#ts-widget');
                }
            })
            .catch(function(err) {
                // Fail-open: allow login if verification endpoint is unreachable
                console.warn('Turnstile verify endpoint unreachable, fail-open:', err);
                tsVerified = true;
                submitBtn.removeAttribute('disabled');
                submitBtn.style.opacity = '1';
                submitBtn.style.cursor = 'pointer';
                tsStatus.textContent = '⚠ Verification unavailable — login allowed';
                tsStatus.style.color = '#eab308';
            });
        }

        // Fail-safe: if Turnstile script doesn't load within 10s, allow login
        setTimeout(function() {
            if (!widgetInjected) {
                console.warn('Turnstile: timeout waiting for login form or Turnstile API');
                var btn = document.querySelector('#LoginForm button[type="submit"], #LoginForm .Button');
                if (btn) {
                    btn.removeAttribute('disabled');
                    btn.style.opacity = '1';
                    btn.style.cursor = 'pointer';
                }
            }
        }, 10000);

        // Watch for Vue app to render the login form
        const observer = new MutationObserver(function(mutations) {
            if (document.getElementById('LoginForm') && !widgetInjected) {
                injectTurnstile();
            }
        });
        observer.observe(document.getElementById('root') || document.body, {
            childList: true, subtree: true
        });

        // Also try immediately in case DOM is already ready
        if (document.readyState !== 'loading') {
            setTimeout(injectTurnstile, 500);
        }
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(injectTurnstile, 500);
        });
    })();
    </script>
    <!-- /Cloudflare Turnstile Plugin -->
JSEOF
)

# Replace placeholders
TURNSTILE_JS=$(echo "$TURNSTILE_JS" | sed "s|__TURNSTILE_SITE_KEY__|${SITE_KEY}|g")
TURNSTILE_JS=$(echo "$TURNSTILE_JS" | sed "s|__VERIFY_URL__|https://${DA_HOSTNAME}/ts-verify.php|g")

# Function to patch a single file
patch_file() {
    local target="$1"
    local backup="$2"
    local label="$3"

    if [ ! -f "$target" ]; then
        echo "SKIP: $target not found"
        return
    fi

    # Backup original only if not already backed up
    if [ ! -f "$backup" ]; then
        cp "$target" "$backup"
        echo "Backed up original $label"
    fi

    # Always start from clean backup to avoid double-patching
    cp "$backup" "$target"

    # Inject before </body> using python3 for reliability
    python3 -c "
import sys
login = open('$target').read()
inject = sys.stdin.read()
result = login.replace('</body>', inject + '\n    </body>')
open('$target', 'w').write(result)
" <<< "$TURNSTILE_JS"

    echo "$label patched with Turnstile (site_key: ${SITE_KEY:0:12}..., verify: https://${DA_HOSTNAME}/ts-verify.php)"
}

# Patch the main SPA entry point (assets/index.html)
patch_file "$LOGIN" "$BACKUP" "assets/index.html"

# Also patch login.html for compatibility with non-Evolution skins
patch_file "$LOGIN_FALLBACK" "$BACKUP_FALLBACK" "login.html"

# Sync conf to various locations for ts-verify.php access
DA_ADMIN=$(grep "^adminname=" /usr/local/directadmin/conf/directadmin.conf 2>/dev/null | cut -d= -f2)
if [ -z "$DA_ADMIN" ]; then
    DA_ADMIN=$(ls /usr/local/directadmin/data/admin/ 2>/dev/null | head -1)
fi

if [ -n "$DA_ADMIN" ] && [ -d "/home/$DA_ADMIN" ]; then
    cp "$CONF" "/home/$DA_ADMIN/.turnstile.conf" 2>/dev/null
    chown "$DA_ADMIN:$DA_ADMIN" "/home/$DA_ADMIN/.turnstile.conf" 2>/dev/null
    chmod 640 "/home/$DA_ADMIN/.turnstile.conf" 2>/dev/null
fi

cp "$CONF" /var/www/.turnstile.conf 2>/dev/null
chmod 644 /var/www/.turnstile.conf 2>/dev/null

cp "$CONF" /tmp/da_turnstile_conf 2>/dev/null
chmod 644 /tmp/da_turnstile_conf 2>/dev/null
