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
 * Cloudflare Turnstile — Русский (ru)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'CAPTCHA-защита для страницы входа DirectAdmin',
    'mode' => 'Режим',
    'mode_prod' => 'Рабочий',
    'mode_sandbox' => 'Песочница (тест)',
    'mode_off' => 'Отключён',
    'mode_prod_desc' => 'Активная защита с вашими ключами Cloudflare',
    'mode_sandbox_desc' => 'Тестовые ключи Cloudflare — виджет виден, но всегда пропускает',
    'mode_off_desc' => 'Turnstile отключён — нет защиты CAPTCHA',
    'api_keys' => 'Ключи API',
    'api_keys_desc' => 'Получите ключи на',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Публичный ключ — виден в исходном коде страницы',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Приватный ключ — для серверной верификации',
    'advanced' => 'Дополнительно',
    'token_ttl' => 'TTL токена (секунды)',
    'token_ttl_hint' => 'Как долго верификация остаётся действительной',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Да — не заблокирует, если CF недоступен',
    'fail_open_no' => 'Нет — более строго',
    'fail_open_hint' => 'Разрешить вход, если Cloudflare недоступен',
    'save' => 'Сохранить конфигурацию',
    'status_active' => 'Рабочий',
    'status_sandbox' => 'Песочница',
    'status_off' => 'Отключён',
    'login_patch' => 'Патч страницы входа',
    'active_verifications' => 'Активные верификации',
    'how_it_works' => 'Как это работает',
    'step1' => 'Пользователь открывает страницу входа DA → виджет Turnstile загружается автоматически',
    'step2' => 'Cloudflare верифицирует пользователя (невидимая проверка или интерактивная)',
    'step3' => 'Токен отправляется на эндпоинт верификации на <code>%s</code>',
    'step4' => 'Сервер верифицирует токен через Cloudflare API и сохраняет одобрение IP',
    'step5' => 'Хук <code>session_create_pre</code> проверяет одобрение перед созданием сессии',
    'msg_saved' => 'Конфигурация успешно сохранена.',
    'msg_keys_required' => 'Оба ключа (Site Key и Secret Key) обязательны в рабочем режиме.',
    'msg_disabled' => 'Turnstile отключён. Исходная страница входа восстановлена.',
    'msg_sandbox' => 'Режим песочницы активен — используются тестовые ключи Cloudflare.',
];
