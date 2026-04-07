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
 * Cloudflare Turnstile — Deutsch (de)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-Schutz für die DirectAdmin-Anmeldeseite',
    'mode' => 'Modus',
    'mode_prod' => 'Produktion',
    'mode_sandbox' => 'Sandbox (Test)',
    'mode_off' => 'Deaktiviert',
    'mode_prod_desc' => 'Aktiver Schutz mit eigenen Cloudflare-Schlüsseln',
    'mode_sandbox_desc' => 'Cloudflare-Testschlüssel — Widget sichtbar, aber durchlässig',
    'mode_off_desc' => 'Turnstile deaktiviert — kein CAPTCHA-Schutz',
    'api_keys' => 'API-Schlüssel',
    'api_keys_desc' => 'Schlüssel abrufen bei',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Öffentlicher Schlüssel — im Quellcode sichtbar',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Privater Schlüssel — für serverseitige Verifizierung',
    'advanced' => 'Erweitert',
    'token_ttl' => 'Token-TTL (Sekunden)',
    'token_ttl_hint' => 'Wie lange die Verifizierung gültig bleibt',
    'fail_open' => 'Fail-Open',
    'fail_open_yes' => 'Ja — sperrt nicht bei CF-Ausfall',
    'fail_open_no' => 'Nein — restriktiver',
    'fail_open_hint' => 'Anmeldung erlauben, wenn Cloudflare nicht erreichbar',
    'save' => 'Konfiguration speichern',
    'status_active' => 'Produktion',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Deaktiviert',
    'login_patch' => 'Login-Seite Patch',
    'active_verifications' => 'Aktive Verifizierungen',
    'how_it_works' => 'Funktionsweise',
    'step1' => 'Benutzer öffnet die DA-Anmeldeseite → Turnstile-Widget lädt automatisch',
    'step2' => 'Cloudflare verifiziert den Benutzer (unsichtbare oder interaktive Prüfung)',
    'step3' => 'Token wird an den Verifizierungsendpunkt auf <code>%s</code> gesendet',
    'step4' => 'Server verifiziert Token mit Cloudflare-API und speichert IP-Freigabe',
    'step5' => 'Hook <code>session_create_pre</code> prüft Freigabe vor Sitzungserstellung',
    'msg_saved' => 'Konfiguration erfolgreich gespeichert.',
    'msg_keys_required' => 'Beide Schlüssel (Site Key und Secret Key) sind im Produktionsmodus erforderlich.',
    'msg_disabled' => 'Turnstile deaktiviert. Original-Anmeldeseite wiederhergestellt.',
    'msg_sandbox' => 'Sandbox-Modus aktiv — Cloudflare-Testschlüssel werden verwendet.',
];
