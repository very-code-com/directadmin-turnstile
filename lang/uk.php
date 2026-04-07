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
 * Cloudflare Turnstile — Українська (uk)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-захист для сторінки входу DirectAdmin',
    'mode' => 'Режим',
    'mode_prod' => 'Робочий',
    'mode_sandbox' => 'Пісочниця (тест)',
    'mode_off' => 'Вимкнено',
    'mode_prod_desc' => 'Активний захист з вашими ключами Cloudflare',
    'mode_sandbox_desc' => 'Тестові ключі Cloudflare — віджет видно, але завжди пропускає',
    'mode_off_desc' => 'Turnstile вимкнено — без захисту CAPTCHA',
    'api_keys' => 'Ключі API',
    'api_keys_desc' => 'Отримайте ключі на',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Публічний ключ — видно у вихідному коді сторінки',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Приватний ключ — для серверної перевірки',
    'advanced' => 'Додатково',
    'token_ttl' => 'TTL токена (секунди)',
    'token_ttl_hint' => 'Як довго перевірка залишається дійсною',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Так — не заблокує, якщо CF недоступний',
    'fail_open_no' => 'Ні — більш суворо',
    'fail_open_hint' => 'Дозволити вхід, якщо Cloudflare недоступний',
    'save' => 'Зберегти конфігурацію',
    'status_active' => 'Робочий',
    'status_sandbox' => 'Пісочниця',
    'status_off' => 'Вимкнено',
    'login_patch' => 'Патч сторінки входу',
    'active_verifications' => 'Активні перевірки',
    'how_it_works' => 'Як це працює',
    'step1' => 'Користувач відкриває сторінку входу DA → віджет Turnstile завантажується автоматично',
    'step2' => 'Cloudflare перевіряє користувача (невидима перевірка або інтерактивна)',
    'step3' => 'Токен надсилається на ендпоінт перевірки на <code>%s</code>',
    'step4' => 'Сервер перевіряє токен через Cloudflare API та зберігає схвалення IP',
    'step5' => 'Хук <code>session_create_pre</code> перевіряє схвалення перед створенням сесії',
    'msg_saved' => 'Конфігурацію успішно збережено.',
    'msg_keys_required' => 'Обидва ключі (Site Key та Secret Key) обов\'язкові в робочому режимі.',
    'msg_disabled' => 'Turnstile вимкнено. Оригінальну сторінку входу відновлено.',
    'msg_sandbox' => 'Режим пісочниці активний — використовуються тестові ключі Cloudflare.',
];
