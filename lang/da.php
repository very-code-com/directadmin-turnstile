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
 * Cloudflare Turnstile — Dansk (da)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-beskyttelse for DirectAdmin-loginsiden',
    'mode' => 'Tilstand',
    'mode_prod' => 'Produktion',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Deaktiveret',
    'mode_prod_desc' => 'Aktiv beskyttelse med dine egne Cloudflare-nøgler',
    'mode_sandbox_desc' => 'Cloudflare-testnøgler — widget synlig men passerer altid',
    'mode_off_desc' => 'Turnstile deaktiveret — ingen CAPTCHA-beskyttelse',
    'api_keys' => 'API-nøgler',
    'api_keys_desc' => 'Hent dine nøgler fra',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Offentlig nøgle — synlig i sidekildekoden',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Privat nøgle — til serversideverifikation',
    'advanced' => 'Avanceret',
    'token_ttl' => 'Token-TTL (sekunder)',
    'token_ttl_hint' => 'Hvor længe verifikationen forbliver gyldig',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Ja — blokerer ikke hvis CF er nede',
    'fail_open_no' => 'Nej — mere restriktiv',
    'fail_open_hint' => 'Tillad login når Cloudflare er utilgængelig',
    'save' => 'Gem konfiguration',
    'status_active' => 'Produktion',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Deaktiveret',
    'login_patch' => 'Loginside-patch',
    'active_verifications' => 'Aktive verifikationer',
    'how_it_works' => 'Hvordan det virker',
    'step1' => 'Brugeren åbner DA-loginsiden → Turnstile-widget indlæses automatisk',
    'step2' => 'Cloudflare verificerer brugeren (usynlig eller interaktiv udfordring)',
    'step3' => 'Token sendes til verifikationsendepunktet på <code>%s</code>',
    'step4' => 'Serveren verificerer token med Cloudflare API og gemmer IP-godkendelse',
    'step5' => 'Hook <code>session_create_pre</code> kontrollerer godkendelse før sessionsoprettelse',
    'msg_saved' => 'Konfigurationen er gemt.',
    'msg_keys_required' => 'Begge nøgler (Site Key og Secret Key) kræves i produktionstilstand.',
    'msg_disabled' => 'Turnstile deaktiveret. Original loginside gendannet.',
    'msg_sandbox' => 'Sandboxtilstand aktiv — Cloudflare-testnøgler bruges.',
];
