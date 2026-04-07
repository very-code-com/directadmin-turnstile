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
 * Cloudflare Turnstile — Magyar (hu)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA védelem a DirectAdmin bejelentkezési oldalához',
    'mode' => 'Mód',
    'mode_prod' => 'Éles',
    'mode_sandbox' => 'Sandbox (teszt)',
    'mode_off' => 'Kikapcsolva',
    'mode_prod_desc' => 'Aktív védelem saját Cloudflare kulcsokkal',
    'mode_sandbox_desc' => 'Cloudflare tesztkulcsok — widget látható, de mindig átenged',
    'mode_off_desc' => 'Turnstile kikapcsolva — nincs CAPTCHA védelem',
    'api_keys' => 'API kulcsok',
    'api_keys_desc' => 'Kulcsok beszerzése innen',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Nyilvános kulcs — látható a forráskódban',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Titkos kulcs — szerver oldali ellenőrzéshez',
    'advanced' => 'Haladó',
    'token_ttl' => 'Token TTL (másodperc)',
    'token_ttl_hint' => 'Meddig marad érvényes az ellenőrzés',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Igen — nem blokkolja, ha a CF nem elérhető',
    'fail_open_no' => 'Nem — szigorúbb',
    'fail_open_hint' => 'Bejelentkezés engedélyezése, ha a Cloudflare nem elérhető',
    'save' => 'Konfiguráció mentése',
    'status_active' => 'Éles',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Kikapcsolva',
    'login_patch' => 'Bejelentkezési oldal patch',
    'active_verifications' => 'Aktív ellenőrzések',
    'how_it_works' => 'Hogyan működik',
    'step1' => 'A felhasználó megnyitja a DA bejelentkezési oldalt → a Turnstile widget automatikusan betöltődik',
    'step2' => 'A Cloudflare ellenőrzi a felhasználót (láthatatlan vagy interaktív kihívás)',
    'step3' => 'A token elküldésre kerül a <code>%s</code> ellenőrzési végpontra',
    'step4' => 'A szerver a Cloudflare API-val ellenőrzi a tokent és menti az IP jóváhagyást',
    'step5' => 'A <code>session_create_pre</code> hook ellenőrzi a jóváhagyást a munkamenet létrehozása előtt',
    'msg_saved' => 'Konfiguráció sikeresen mentve.',
    'msg_keys_required' => 'Mindkét kulcs (Site Key és Secret Key) szükséges éles módban.',
    'msg_disabled' => 'Turnstile kikapcsolva. Az eredeti bejelentkezési oldal visszaállítva.',
    'msg_sandbox' => 'Sandbox mód aktív — Cloudflare tesztkulcsok használatban.',
];
