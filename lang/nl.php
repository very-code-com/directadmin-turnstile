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
 * Cloudflare Turnstile — Nederlands (nl)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-beveiliging voor de DirectAdmin-inlogpagina',
    'mode' => 'Modus',
    'mode_prod' => 'Productie',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Uitgeschakeld',
    'mode_prod_desc' => 'Actieve beveiliging met uw eigen Cloudflare-sleutels',
    'mode_sandbox_desc' => 'Cloudflare-testsleutels — widget zichtbaar maar laat altijd door',
    'mode_off_desc' => 'Turnstile uitgeschakeld — geen CAPTCHA-beveiliging',
    'api_keys' => 'API-sleutels',
    'api_keys_desc' => 'Haal uw sleutels op bij',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Publieke sleutel — zichtbaar in de broncode',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Privésleutel — voor serververificatie',
    'advanced' => 'Geavanceerd',
    'token_ttl' => 'Token-TTL (seconden)',
    'token_ttl_hint' => 'Hoe lang de verificatie geldig blijft',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Ja — blokkeert niet als CF onbereikbaar is',
    'fail_open_no' => 'Nee — restrictiever',
    'fail_open_hint' => 'Inloggen toestaan als Cloudflare onbereikbaar is',
    'save' => 'Configuratie opslaan',
    'status_active' => 'Productie',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Uitgeschakeld',
    'login_patch' => 'Inlogpagina-patch',
    'active_verifications' => 'Actieve verificaties',
    'how_it_works' => 'Hoe het werkt',
    'step1' => 'Gebruiker opent de DA-inlogpagina → Turnstile-widget laadt automatisch',
    'step2' => 'Cloudflare verifieert de gebruiker (onzichtbare of interactieve uitdaging)',
    'step3' => 'Token wordt verzonden naar het verificatie-eindpunt op <code>%s</code>',
    'step4' => 'Server verifieert token met Cloudflare-API en slaat IP-goedkeuring op',
    'step5' => 'Hook <code>session_create_pre</code> controleert goedkeuring voor sessiecreatie',
    'msg_saved' => 'Configuratie succesvol opgeslagen.',
    'msg_keys_required' => 'Beide sleutels (Site Key en Secret Key) zijn vereist in productiemodus.',
    'msg_disabled' => 'Turnstile uitgeschakeld. Originele inlogpagina hersteld.',
    'msg_sandbox' => 'Sandboxmodus actief — Cloudflare-testsleutels worden gebruikt.',
];
