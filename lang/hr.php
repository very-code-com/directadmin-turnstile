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
 * Cloudflare Turnstile — Hrvatski (hr)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA zaštita za DirectAdmin stranicu za prijavu',
    'mode' => 'Način',
    'mode_prod' => 'Produkcija',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Isključeno',
    'mode_prod_desc' => 'Aktivna zaštita s vlastitim Cloudflare ključevima',
    'mode_sandbox_desc' => 'Cloudflare testni ključevi — widget vidljiv ali uvijek prolazi',
    'mode_off_desc' => 'Turnstile isključen — bez CAPTCHA zaštite',
    'api_keys' => 'API ključevi',
    'api_keys_desc' => 'Preuzmite ključeve na',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Javni ključ — vidljiv u izvornom kodu stranice',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Privatni ključ — za provjeru na strani poslužitelja',
    'advanced' => 'Napredno',
    'token_ttl' => 'TTL tokena (sekunde)',
    'token_ttl_hint' => 'Koliko dugo provjera ostaje valjana',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Da — ne blokira ako CF nije dostupan',
    'fail_open_no' => 'Ne — strože',
    'fail_open_hint' => 'Dopusti prijavu kada Cloudflare nije dostupan',
    'save' => 'Spremi konfiguraciju',
    'status_active' => 'Produkcija',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Isključeno',
    'login_patch' => 'Zakrpa stranice za prijavu',
    'active_verifications' => 'Aktivne provjere',
    'how_it_works' => 'Kako radi',
    'step1' => 'Korisnik otvori DA stranicu za prijavu → Turnstile widget se automatski učitava',
    'step2' => 'Cloudflare provjerava korisnika (nevidljivi ili interaktivni izazov)',
    'step3' => 'Token se šalje na krajnju točku provjere na <code>%s</code>',
    'step4' => 'Poslužitelj provjerava token s Cloudflare API-jem i sprema IP odobrenje',
    'step5' => 'Hook <code>session_create_pre</code> provjerava odobrenje prije stvaranja sesije',
    'msg_saved' => 'Konfiguracija je uspješno spremljena.',
    'msg_keys_required' => 'Oba ključa (Site Key i Secret Key) su potrebna u produkcijskom načinu.',
    'msg_disabled' => 'Turnstile isključen. Originalna stranica za prijavu vraćena.',
    'msg_sandbox' => 'Sandbox način aktivan — koriste se Cloudflare testni ključevi.',
];
