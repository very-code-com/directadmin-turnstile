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
 * Cloudflare Turnstile — Suomi (fi)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-suojaus DirectAdmin-kirjautumissivulle',
    'mode' => 'Tila',
    'mode_prod' => 'Tuotanto',
    'mode_sandbox' => 'Sandbox (testi)',
    'mode_off' => 'Pois käytöstä',
    'mode_prod_desc' => 'Aktiivinen suojaus omilla Cloudflare-avaimilla',
    'mode_sandbox_desc' => 'Cloudflaren testiavaimet — widget näkyvissä mutta läpäisee aina',
    'mode_off_desc' => 'Turnstile pois käytöstä — ei CAPTCHA-suojausta',
    'api_keys' => 'API-avaimet',
    'api_keys_desc' => 'Hanki avaimesi osoitteesta',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Julkinen avain — näkyy sivun lähdekoodissa',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Yksityinen avain — palvelinpuolen varmennukseen',
    'advanced' => 'Lisäasetukset',
    'token_ttl' => 'Tokenin TTL (sekuntia)',
    'token_ttl_hint' => 'Kuinka kauan varmennus pysyy voimassa',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Kyllä — ei estä, jos CF ei ole käytettävissä',
    'fail_open_no' => 'Ei — tiukempi',
    'fail_open_hint' => 'Salli kirjautuminen, kun Cloudflare ei ole tavoitettavissa',
    'save' => 'Tallenna asetukset',
    'status_active' => 'Tuotanto',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Pois käytöstä',
    'login_patch' => 'Kirjautumissivun korjaus',
    'active_verifications' => 'Aktiiviset varmennukset',
    'how_it_works' => 'Miten se toimii',
    'step1' => 'Käyttäjä avaa DA-kirjautumissivun → Turnstile-widget latautuu automaattisesti',
    'step2' => 'Cloudflare varmentaa käyttäjän (näkymätön tai interaktiivinen haaste)',
    'step3' => 'Token lähetetään varmennuspisteeseen osoitteessa <code>%s</code>',
    'step4' => 'Palvelin varmentaa tokenin Cloudflare API:lla ja tallentaa IP-hyväksynnän',
    'step5' => 'Hook <code>session_create_pre</code> tarkistaa hyväksynnän ennen istunnon luontia',
    'msg_saved' => 'Asetukset tallennettu onnistuneesti.',
    'msg_keys_required' => 'Molemmat avaimet (Site Key ja Secret Key) vaaditaan tuotantotilassa.',
    'msg_disabled' => 'Turnstile pois käytöstä. Alkuperäinen kirjautumissivu palautettu.',
    'msg_sandbox' => 'Sandbox-tila aktiivinen — käytetään Cloudflaren testiavaimia.',
];
