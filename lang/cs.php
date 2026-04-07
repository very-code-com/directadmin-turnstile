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
 * Cloudflare Turnstile — Čeština (cs)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA ochrana pro přihlašovací stránku DirectAdmin',
    'mode' => 'Režim',
    'mode_prod' => 'Produkce',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Vypnuto',
    'mode_prod_desc' => 'Aktivní ochrana s vlastními klíči Cloudflare',
    'mode_sandbox_desc' => 'Testovací klíče Cloudflare — widget viditelný, ale vždy projde',
    'mode_off_desc' => 'Turnstile vypnuto — žádná ochrana CAPTCHA',
    'api_keys' => 'Klíče API',
    'api_keys_desc' => 'Získejte klíče na',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Veřejný klíč — viditelný ve zdrojovém kódu stránky',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Soukromý klíč — pro ověření na straně serveru',
    'advanced' => 'Pokročilé',
    'token_ttl' => 'TTL tokenu (sekundy)',
    'token_ttl_hint' => 'Jak dlouho zůstane ověření platné',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Ano — nezablokuje, pokud je CF nedostupný',
    'fail_open_no' => 'Ne — přísnější',
    'fail_open_hint' => 'Povolit přihlášení, když je Cloudflare nedostupný',
    'save' => 'Uložit konfiguraci',
    'status_active' => 'Produkce',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Vypnuto',
    'login_patch' => 'Patch přihlašovací stránky',
    'active_verifications' => 'Aktivní ověření',
    'how_it_works' => 'Jak to funguje',
    'step1' => 'Uživatel otevře přihlašovací stránku DA → widget Turnstile se automaticky načte',
    'step2' => 'Cloudflare ověří uživatele (neviditelná nebo interaktivní výzva)',
    'step3' => 'Token je odeslán na ověřovací endpoint na <code>%s</code>',
    'step4' => 'Server ověří token pomocí Cloudflare API a uloží schválení IP',
    'step5' => 'Hook <code>session_create_pre</code> zkontroluje schválení před vytvořením relace',
    'msg_saved' => 'Konfigurace byla úspěšně uložena.',
    'msg_keys_required' => 'Oba klíče (Site Key a Secret Key) jsou vyžadovány v produkčním režimu.',
    'msg_disabled' => 'Turnstile vypnuto. Původní přihlašovací stránka obnovena.',
    'msg_sandbox' => 'Sandbox režim aktivní — používají se testovací klíče Cloudflare.',
];
