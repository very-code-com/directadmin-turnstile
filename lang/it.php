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
 * Cloudflare Turnstile — Italiano (it)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'Protezione CAPTCHA per la pagina di accesso DirectAdmin',
    'mode' => 'Modalità',
    'mode_prod' => 'Produzione',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Disattivato',
    'mode_prod_desc' => 'Protezione attiva con le tue chiavi Cloudflare',
    'mode_sandbox_desc' => 'Chiavi di test Cloudflare — widget visibile ma sempre superato',
    'mode_off_desc' => 'Turnstile disattivato — nessuna protezione CAPTCHA',
    'api_keys' => 'Chiavi API',
    'api_keys_desc' => 'Ottieni le tue chiavi da',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Chiave pubblica — visibile nel codice sorgente',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Chiave privata — per la verifica lato server',
    'advanced' => 'Avanzate',
    'token_ttl' => 'TTL del token (secondi)',
    'token_ttl_hint' => 'Durata della validità della verifica',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Sì — non blocca se CF non è disponibile',
    'fail_open_no' => 'No — più restrittivo',
    'fail_open_hint' => 'Consentire l\'accesso quando Cloudflare non è raggiungibile',
    'save' => 'Salva configurazione',
    'status_active' => 'Produzione',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Disattivato',
    'login_patch' => 'Patch pagina di accesso',
    'active_verifications' => 'Verifiche attive',
    'how_it_works' => 'Come funziona',
    'step1' => 'L\'utente apre la pagina di accesso DA → il widget Turnstile si carica automaticamente',
    'step2' => 'Cloudflare verifica l\'utente (sfida invisibile o interattiva)',
    'step3' => 'Il token viene inviato all\'endpoint di verifica su <code>%s</code>',
    'step4' => 'Il server verifica il token con l\'API Cloudflare e salva l\'approvazione IP',
    'step5' => 'L\'hook <code>session_create_pre</code> controlla l\'approvazione prima della creazione della sessione',
    'msg_saved' => 'Configurazione salvata con successo.',
    'msg_keys_required' => 'Entrambe le chiavi (Site Key e Secret Key) sono necessarie in modalità produzione.',
    'msg_disabled' => 'Turnstile disattivato. Pagina di accesso originale ripristinata.',
    'msg_sandbox' => 'Modalità sandbox attiva — chiavi di test Cloudflare in uso.',
];
