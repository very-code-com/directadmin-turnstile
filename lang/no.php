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
 * Cloudflare Turnstile — Norsk (no)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-beskyttelse for DirectAdmin-innloggingssiden',
    'mode' => 'Modus',
    'mode_prod' => 'Produksjon',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Deaktivert',
    'mode_prod_desc' => 'Aktiv beskyttelse med dine egne Cloudflare-nøkler',
    'mode_sandbox_desc' => 'Cloudflare-testnøkler — widget synlig men passerer alltid',
    'mode_off_desc' => 'Turnstile deaktivert — ingen CAPTCHA-beskyttelse',
    'api_keys' => 'API-nøkler',
    'api_keys_desc' => 'Hent nøklene dine fra',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Offentlig nøkkel — synlig i sidens kildekode',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Privat nøkkel — for serversidebekreftelse',
    'advanced' => 'Avansert',
    'token_ttl' => 'Token-TTL (sekunder)',
    'token_ttl_hint' => 'Hvor lenge verifiseringen forblir gyldig',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Ja — blokkerer ikke hvis CF er nede',
    'fail_open_no' => 'Nei — strengere',
    'fail_open_hint' => 'Tillat innlogging når Cloudflare er utilgjengelig',
    'save' => 'Lagre konfigurasjon',
    'status_active' => 'Produksjon',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Deaktivert',
    'login_patch' => 'Innloggingsside-patch',
    'active_verifications' => 'Aktive verifiseringer',
    'how_it_works' => 'Hvordan det fungerer',
    'step1' => 'Brukeren åpner DA-innloggingssiden → Turnstile-widgeten lastes automatisk',
    'step2' => 'Cloudflare verifiserer brukeren (usynlig eller interaktiv utfordring)',
    'step3' => 'Token sendes til verifiseringsendepunktet på <code>%s</code>',
    'step4' => 'Serveren verifiserer token med Cloudflare API og lagrer IP-godkjenning',
    'step5' => 'Hook <code>session_create_pre</code> sjekker godkjenning før opprettelse av økt',
    'msg_saved' => 'Konfigurasjonen er lagret.',
    'msg_keys_required' => 'Begge nøklene (Site Key og Secret Key) kreves i produksjonsmodus.',
    'msg_disabled' => 'Turnstile deaktivert. Opprinnelig innloggingsside gjenopprettet.',
    'msg_sandbox' => 'Sandboxmodus aktiv — Cloudflare-testnøkler brukes.',
];
