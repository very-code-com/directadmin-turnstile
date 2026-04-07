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
 * Cloudflare Turnstile — Svenska (sv)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-skydd för DirectAdmin-inloggningssidan',
    'mode' => 'Läge',
    'mode_prod' => 'Produktion',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Inaktiverad',
    'mode_prod_desc' => 'Aktivt skydd med dina egna Cloudflare-nycklar',
    'mode_sandbox_desc' => 'Cloudflare-testnycklar — widget synlig men passerar alltid',
    'mode_off_desc' => 'Turnstile inaktiverad — inget CAPTCHA-skydd',
    'api_keys' => 'API-nycklar',
    'api_keys_desc' => 'Hämta dina nycklar från',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Publik nyckel — synlig i sidkällan',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Privat nyckel — för serversideverifiering',
    'advanced' => 'Avancerat',
    'token_ttl' => 'Token-TTL (sekunder)',
    'token_ttl_hint' => 'Hur länge verifieringen förblir giltig',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Ja — blockerar inte om CF är nere',
    'fail_open_no' => 'Nej — striktare',
    'fail_open_hint' => 'Tillåt inloggning när Cloudflare är oåtkomlig',
    'save' => 'Spara konfiguration',
    'status_active' => 'Produktion',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Inaktiverad',
    'login_patch' => 'Inloggningssidepatch',
    'active_verifications' => 'Aktiva verifieringar',
    'how_it_works' => 'Hur det fungerar',
    'step1' => 'Användaren öppnar DA-inloggningssidan → Turnstile-widgeten laddas automatiskt',
    'step2' => 'Cloudflare verifierar användaren (osynlig eller interaktiv utmaning)',
    'step3' => 'Token skickas till verifieringsendpunkten på <code>%s</code>',
    'step4' => 'Servern verifierar token med Cloudflare API och sparar IP-godkännande',
    'step5' => 'Hook <code>session_create_pre</code> kontrollerar godkännande innan sessionsskapande',
    'msg_saved' => 'Konfigurationen har sparats.',
    'msg_keys_required' => 'Båda nycklarna (Site Key och Secret Key) krävs i produktionsläge.',
    'msg_disabled' => 'Turnstile inaktiverad. Ursprunglig inloggningssida återställd.',
    'msg_sandbox' => 'Sandboxläge aktivt — Cloudflare-testnycklar används.',
];
