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
 * Cloudflare Turnstile — Polski (pl)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'Ochrona CAPTCHA dla strony logowania DirectAdmin',
    'mode' => 'Tryb',
    'mode_prod' => 'Produkcja',
    'mode_sandbox' => 'Sandbox (testowy)',
    'mode_off' => 'Wyłączony',
    'mode_prod_desc' => 'Aktywna ochrona z własnymi kluczami Cloudflare',
    'mode_sandbox_desc' => 'Klucze testowe Cloudflare — widget widoczny ale zawsze przepuszcza',
    'mode_off_desc' => 'Turnstile wyłączony — brak ochrony CAPTCHA',
    'api_keys' => 'Klucze API',
    'api_keys_desc' => 'Pobierz klucze z',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Klucz publiczny — widoczny w kodzie strony',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Klucz prywatny — używany do weryfikacji server-side',
    'advanced' => 'Zaawansowane',
    'token_ttl' => 'Token TTL (sekundy)',
    'token_ttl_hint' => 'Jak długo weryfikacja jest ważna',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Tak — nie zablokuje Cię gdy CF niedostępny',
    'fail_open_no' => 'Nie — bardziej restrykcyjnie',
    'fail_open_hint' => 'Czy wpuszczać gdy Cloudflare jest niedostępny',
    'save' => 'Zapisz konfigurację',
    'status_active' => 'Produkcja',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Wyłączony',
    'login_patch' => 'Login page patch',
    'active_verifications' => 'Aktywne weryfikacje',
    'how_it_works' => 'Jak to działa',
    'step1' => 'Użytkownik otwiera stronę logowania DA → widget Turnstile ładuje się automatycznie',
    'step2' => 'Cloudflare weryfikuje użytkownika (niewidoczny challenge lub interaktywny)',
    'step3' => 'Token jest wysyłany do endpointu weryfikacji na <code>%s</code>',
    'step4' => 'Serwer weryfikuje token z Cloudflare API i zapisuje zatwierdzenie IP',
    'step5' => 'Hook <code>session_create_pre</code> sprawdza zatwierdzenie przed utworzeniem sesji',
    'msg_saved' => 'Konfiguracja zapisana pomyślnie.',
    'msg_keys_required' => 'Oba klucze (Site Key i Secret Key) są wymagane w trybie produkcji.',
    'msg_disabled' => 'Turnstile wyłączony. Oryginalna strona logowania przywrócona.',
    'msg_sandbox' => 'Tryb sandbox aktywny — klucze testowe Cloudflare.',
];
