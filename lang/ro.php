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
 * Cloudflare Turnstile — Română (ro)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'Protecție CAPTCHA pentru pagina de autentificare DirectAdmin',
    'mode' => 'Mod',
    'mode_prod' => 'Producție',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Dezactivat',
    'mode_prod_desc' => 'Protecție activă cu propriile chei Cloudflare',
    'mode_sandbox_desc' => 'Chei de test Cloudflare — widget vizibil dar trece mereu',
    'mode_off_desc' => 'Turnstile dezactivat — fără protecție CAPTCHA',
    'api_keys' => 'Chei API',
    'api_keys_desc' => 'Obțineți cheile de la',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Cheie publică — vizibilă în codul sursă',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Cheie privată — pentru verificare pe server',
    'advanced' => 'Avansat',
    'token_ttl' => 'TTL token (secunde)',
    'token_ttl_hint' => 'Cât timp rămâne valabilă verificarea',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Da — nu blochează dacă CF este indisponibil',
    'fail_open_no' => 'Nu — mai restrictiv',
    'fail_open_hint' => 'Permite autentificarea când Cloudflare este inaccesibil',
    'save' => 'Salvează configurația',
    'status_active' => 'Producție',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Dezactivat',
    'login_patch' => 'Patch pagina de autentificare',
    'active_verifications' => 'Verificări active',
    'how_it_works' => 'Cum funcționează',
    'step1' => 'Utilizatorul deschide pagina de autentificare DA → widget-ul Turnstile se încarcă automat',
    'step2' => 'Cloudflare verifică utilizatorul (provocare invizibilă sau interactivă)',
    'step3' => 'Token-ul este trimis la punctul de verificare pe <code>%s</code>',
    'step4' => 'Serverul verifică token-ul cu API-ul Cloudflare și salvează aprobarea IP',
    'step5' => 'Hook-ul <code>session_create_pre</code> verifică aprobarea înainte de crearea sesiunii',
    'msg_saved' => 'Configurația a fost salvată cu succes.',
    'msg_keys_required' => 'Ambele chei (Site Key și Secret Key) sunt necesare în modul producție.',
    'msg_disabled' => 'Turnstile dezactivat. Pagina de autentificare originală a fost restaurată.',
    'msg_sandbox' => 'Mod sandbox activ — se folosesc chei de test Cloudflare.',
];
