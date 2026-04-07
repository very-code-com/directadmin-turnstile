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
 * Cloudflare Turnstile — Srpski (sr)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA zaštita za DirectAdmin stranicu za prijavu',
    'mode' => 'Režim',
    'mode_prod' => 'Produkcija',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Isključeno',
    'mode_prod_desc' => 'Aktivna zaštita sa vašim Cloudflare ključevima',
    'mode_sandbox_desc' => 'Cloudflare test ključevi — widget vidljiv ali uvek prolazi',
    'mode_off_desc' => 'Turnstile isključen — bez CAPTCHA zaštite',
    'api_keys' => 'API ključevi',
    'api_keys_desc' => 'Preuzmite ključeve sa',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Javni ključ — vidljiv u izvornom kodu stranice',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Privatni ključ — za verifikaciju na strani servera',
    'advanced' => 'Napredno',
    'token_ttl' => 'TTL tokena (sekunde)',
    'token_ttl_hint' => 'Koliko dugo verifikacija ostaje važeća',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Da — ne blokira ako CF nije dostupan',
    'fail_open_no' => 'Ne — strožije',
    'fail_open_hint' => 'Dozvoli prijavu kada Cloudflare nije dostupan',
    'save' => 'Sačuvaj konfiguraciju',
    'status_active' => 'Produkcija',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Isključeno',
    'login_patch' => 'Zakrpa stranice za prijavu',
    'active_verifications' => 'Aktivne verifikacije',
    'how_it_works' => 'Kako funkcioniše',
    'step1' => 'Korisnik otvori DA stranicu za prijavu → Turnstile widget se automatski učitava',
    'step2' => 'Cloudflare verifikuje korisnika (nevidljivi ili interaktivni izazov)',
    'step3' => 'Token se šalje na verifikacionu tačku na <code>%s</code>',
    'step4' => 'Server verifikuje token sa Cloudflare API i čuva IP odobrenje',
    'step5' => 'Hook <code>session_create_pre</code> proverava odobrenje pre kreiranja sesije',
    'msg_saved' => 'Konfiguracija je uspešno sačuvana.',
    'msg_keys_required' => 'Oba ključa (Site Key i Secret Key) su potrebna u produkcionom režimu.',
    'msg_disabled' => 'Turnstile isključen. Originalna stranica za prijavu je vraćena.',
    'msg_sandbox' => 'Sandbox režim aktivan — koriste se Cloudflare test ključevi.',
];
