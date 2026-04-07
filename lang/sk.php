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
 * Cloudflare Turnstile — Slovenčina (sk)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA ochrana pre prihlasovaciu stránku DirectAdmin',
    'mode' => 'Režim',
    'mode_prod' => 'Produkcia',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Vypnuté',
    'mode_prod_desc' => 'Aktívna ochrana s vlastnými kľúčmi Cloudflare',
    'mode_sandbox_desc' => 'Testovacie kľúče Cloudflare — widget viditeľný, ale vždy prejde',
    'mode_off_desc' => 'Turnstile vypnuté — žiadna ochrana CAPTCHA',
    'api_keys' => 'Kľúče API',
    'api_keys_desc' => 'Získajte kľúče na',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Verejný kľúč — viditeľný v zdrojovom kóde stránky',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Súkromný kľúč — pre overenie na strane servera',
    'advanced' => 'Pokročilé',
    'token_ttl' => 'TTL tokenu (sekundy)',
    'token_ttl_hint' => 'Ako dlho zostane overenie platné',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Áno — nezablokuje, ak je CF nedostupný',
    'fail_open_no' => 'Nie — prísnejšie',
    'fail_open_hint' => 'Povoliť prihlásenie, keď je Cloudflare nedostupný',
    'save' => 'Uložiť konfiguráciu',
    'status_active' => 'Produkcia',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Vypnuté',
    'login_patch' => 'Patch prihlasovacej stránky',
    'active_verifications' => 'Aktívne overenia',
    'how_it_works' => 'Ako to funguje',
    'step1' => 'Používateľ otvorí prihlasovaciu stránku DA → widget Turnstile sa automaticky načíta',
    'step2' => 'Cloudflare overí používateľa (neviditeľná alebo interaktívna výzva)',
    'step3' => 'Token je odoslaný na overovací endpoint na <code>%s</code>',
    'step4' => 'Server overí token pomocou Cloudflare API a uloží schválenie IP',
    'step5' => 'Hook <code>session_create_pre</code> skontroluje schválenie pred vytvorením relácie',
    'msg_saved' => 'Konfigurácia bola úspešne uložená.',
    'msg_keys_required' => 'Oba kľúče (Site Key a Secret Key) sú vyžadované v produkčnom režime.',
    'msg_disabled' => 'Turnstile vypnuté. Pôvodná prihlasovacia stránka obnovená.',
    'msg_sandbox' => 'Sandbox režim aktívny — používajú sa testovacie kľúče Cloudflare.',
];
