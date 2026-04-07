# Cloudflare Turnstile for DirectAdmin

> **Disclaimer:** This software is provided "as is", without warranty of any kind. Use at your own risk. The author assumes no responsibility for any damage, data loss, security issues, or compatibility problems arising from the use of this plugin. See the [License](#license) section for full terms.

Plugin **Cloudflare Turnstile** (CAPTCHA) for **DirectAdmin** — protects the login page against bots and brute-force attacks.

Works with the Evolution skin (Vue SPA). Injects the Turnstile widget via MutationObserver, verifies the token server-side through Cloudflare API, and blocks DA session creation without positive verification.

**🌍 27 languages** — auto-detected from DirectAdmin language settings:
`ar` `cs` `da` `de` `el` `en` `es` `fi` `fr` `hr` `hu` `it` `ja` `nl` `no` `pl` `pt_BR` `pt_PT` `ro` `ru` `sk` `sr` `sv` `tr` `uk` `zh_CN` `zh_TW`

---

## Requirements

- DirectAdmin 1.6+ with **Evolution** skin
- PHP 8.x on the server (for `ts-verify.php`)
- nginx serving the DA hostname with valid SSL certificate
- Cloudflare account with Turnstile: https://dash.cloudflare.com → Turnstile

---

## File Structure

```
turnstile/
├── plugin.conf                         # DA plugin metadata
├── conf/
│   └── turnstile.conf                  # Configuration (API keys, options)
├── admin/
│   └── index.html                      # Admin panel (PHP CGI)
├── lang/                               # i18n — 27 languages
│   ├── en.php
│   ├── pl.php
│   ├── de.php
│   └── ...
├── hooks/
│   ├── admin_txt.html                  # DA admin menu link
│   └── session_create_pre/
│       └── turnstile.sh                # Hook — blocks login without verification
├── scripts/
│   ├── install.sh                      # Installation script
│   ├── uninstall.sh                    # Uninstall + restore original
│   └── patch_login.sh                  # Patches login.html with Turnstile widget
├── ts-verify.php                       # Verification endpoint (deployed to webroot)
├── images/
│   └── admin_icon.svg                  # DA menu icon
└── README.md                           # This file
```

---

## Installation

### Option A — Plugin Manager (recommended)

1. Download `turnstile-vX.Y.Z.tar.gz` from [GitHub Releases](../../releases/latest)
2. In DirectAdmin, go to **Extra Features → Plugin Manager**
3. Click **Add Plugin** and upload the `.tar.gz` file
4. Enter your admin password and confirm
5. DirectAdmin installs the plugin and runs `scripts/install.sh` automatically

### Option B — Manual (fallback)

#### 1. Copy files to the server

```bash
scp -r turnstile/ root@YOUR_SERVER:/usr/local/directadmin/plugins/turnstile/
```

#### 2. Run the install script

```bash
bash /usr/local/directadmin/plugins/turnstile/scripts/install.sh
```

The install script automatically:
- Sets correct file permissions (including `chmod 666` on config for DA admin writes)
- Deploys `ts-verify.php` to `/var/www/html/` (DA hostname webroot with valid SSL)
- Patches `login.html` with the Turnstile widget
- Creates the verification temp directory
- Syncs config to all PHP-FPM accessible locations

### Configure via GUI

Go to **DirectAdmin → Plugins → Cloudflare Turnstile** and:
1. Select **Production** mode
2. Enter your Turnstile **Site Key** and **Secret Key**
3. Click **Save**

Or start with **Sandbox** mode to test without real keys.

---

## How It Works

```
User → login.html (patched) → Turnstile widget renders in the form
    ↓
Cloudflare verifies the user (invisible challenge or interactive)
    ↓
Token → fetch() → https://DA_HOSTNAME/ts-verify.php
    ↓
ts-verify.php → Cloudflare API (siteverify) → saves IP approval marker
    ↓
User clicks "Sign in" → DA validates credentials
    ↓
Hook session_create_pre/turnstile.sh → checks IP marker
    ↓
Marker OK → session created | No marker → login blocked
```

### Verification Endpoint

The plugin deploys `ts-verify.php` to `/var/www/html/` — the DA hostname's nginx webroot. This ensures:
- Valid SSL certificate (DA hostname always has one)
- No CORS issues (cross-origin from DA panel port to HTTPS port 443)
- No user-specific path dependencies

The endpoint reads config from multiple fallback locations:
1. `/var/www/.turnstile.conf` (webapps pool — PrivateTmp safe)
2. `/tmp/da_turnstile_conf` (shared temp)
3. `/usr/local/directadmin/plugins/turnstile/conf/turnstile.conf` (plugin dir)

### Config Sync

PHP-FPM pools have `open_basedir` and `PrivateTmp=yes` restrictions, so the plugin syncs `turnstile.conf` to multiple locations on every save:
- `/home/DA_USER/.turnstile.conf` — user's PHP-FPM pool
- `/var/www/.turnstile.conf` — webapps pool
- `/tmp/da_turnstile_conf` — general access

---

## Modes

| Mode | Description |
|------|-------------|
| **Production** | Active protection with your own Cloudflare Turnstile keys |
| **Sandbox** | Uses Cloudflare test keys — widget visible but always passes (for testing) |
| **Disabled** | No CAPTCHA — original login page restored |

### Cloudflare Test Keys (Sandbox)

| Key | Value |
|-----|-------|
| Site Key | `1x00000000000000000000AA` |
| Secret Key | `1x0000000000000000000000000000000AA` |

> ⚠️ Test keys show a red banner — switch to production keys for real protection.

---

## Portability

The plugin is fully portable — **no hardcoded usernames, domains, or paths**. All environment-specific values are detected automatically:

| Value | Detection Method |
|-------|-----------------|
| DA hostname | `servername=` from `directadmin.conf` |
| DA port | `port=` from `directadmin.conf` |
| DA admin user | `getenv('USERNAME')` in CGI / `adminname=` in shell |
| User home dir | `/home/$DA_USER` |
| Verify URL | `https://$DA_HOSTNAME/ts-verify.php` |
| CORS origins | Dynamic based on DA hostname |
| Language | DA's built-in language switcher (`getenv('LANGUAGE')`) |

To install on any DirectAdmin server, just copy the plugin directory and run `install.sh`.

---

## After DirectAdmin Update

DA updates may overwrite `login.html`. Re-apply the patch:

```bash
bash /usr/local/directadmin/plugins/turnstile/scripts/patch_login.sh
```

---

## Uninstall

```bash
bash /usr/local/directadmin/plugins/turnstile/scripts/uninstall.sh
rm -rf /usr/local/directadmin/plugins/turnstile/
```

---

## Security

- **Server-side verification** — token checked with Cloudflare API, not just client-side
- **Secret key** never leaves the server
- **Fail-open** — if Cloudflare is down, login still works (configurable)
- **One-time markers** — IP approval marker is deleted after use
- **TTL** — markers expire after configured time (default 5 min)
- Recommended to combine with DA's built-in brute-force protection (`jail=1`)

---

## Troubleshooting

### CORS errors on login page
The verification endpoint must be served with a valid SSL certificate. The plugin uses the DA hostname (`servername` from `directadmin.conf`) which always has a cert. If you see CORS errors, check:
```bash
curl -sI https://$(grep servername= /usr/local/directadmin/conf/directadmin.conf | cut -d= -f2)/ts-verify.php
```

### Config not saving
DA plugin CGI runs as the logged-in user, not as `diradmin`. Ensure:
```bash
chmod 666 /usr/local/directadmin/plugins/turnstile/conf/turnstile.conf
chmod 777 /usr/local/directadmin/plugins/turnstile/conf/
```

### Widget not showing on login page
Check if `login.html` is patched:
```bash
grep "Turnstile" /usr/local/directadmin/data/skins/evolution/login.html
```
If not, re-run: `bash /usr/local/directadmin/plugins/turnstile/scripts/patch_login.sh`

### Verification endpoint returns "Plugin not configured"
Config sync issue. Manually copy:
```bash
cp /usr/local/directadmin/plugins/turnstile/conf/turnstile.conf /var/www/.turnstile.conf
chmod 644 /var/www/.turnstile.conf
```

---

## Releases

Plugin archives (`turnstile-vX.Y.Z.tar.gz`) compatible with **DirectAdmin Plugin Manager** are built automatically on every [GitHub Release](../../releases).

To create a new release:
```bash
git tag v2.1.0
git push origin v2.1.0
# Then create a release on GitHub from the tag
```

GitHub Actions will build and attach the `.tar.gz` archive to the release.

---

## Disclaimer

THIS SOFTWARE IS PROVIDED "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, LOSS OF DATA, SECURITY BREACHES, OR SERVICE INTERRUPTION) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

This plugin modifies DirectAdmin login page files. While an uninstall script is provided, always ensure you have backups of your server before installation. Compatibility with future DirectAdmin versions is not guaranteed.

## License

Copyright 2026 Emilian Scibisz. Licensed under the [Apache License, Version 2.0](LICENSE).
