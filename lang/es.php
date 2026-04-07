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
 * Cloudflare Turnstile — Español (es)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'Protección CAPTCHA para la página de inicio de sesión de DirectAdmin',
    'mode' => 'Modo',
    'mode_prod' => 'Producción',
    'mode_sandbox' => 'Sandbox (pruebas)',
    'mode_off' => 'Desactivado',
    'mode_prod_desc' => 'Protección activa con sus propias claves de Cloudflare',
    'mode_sandbox_desc' => 'Claves de prueba de Cloudflare — widget visible pero siempre pasa',
    'mode_off_desc' => 'Turnstile desactivado — sin protección CAPTCHA',
    'api_keys' => 'Claves API',
    'api_keys_desc' => 'Obtén tus claves en',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Clave pública — visible en el código fuente',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Clave privada — para verificación del lado del servidor',
    'advanced' => 'Avanzado',
    'token_ttl' => 'TTL del token (segundos)',
    'token_ttl_hint' => 'Duración de la validez de la verificación',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Sí — no bloqueará si CF no está disponible',
    'fail_open_no' => 'No — más restrictivo',
    'fail_open_hint' => 'Permitir inicio de sesión cuando Cloudflare no está accesible',
    'save' => 'Guardar configuración',
    'status_active' => 'Producción',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Desactivado',
    'login_patch' => 'Parche página de inicio',
    'active_verifications' => 'Verificaciones activas',
    'how_it_works' => 'Cómo funciona',
    'step1' => 'El usuario abre la página de inicio de sesión de DA → el widget Turnstile se carga automáticamente',
    'step2' => 'Cloudflare verifica al usuario (desafío invisible o interactivo)',
    'step3' => 'El token se envía al punto de verificación en <code>%s</code>',
    'step4' => 'El servidor verifica el token con la API de Cloudflare y guarda la aprobación de IP',
    'step5' => 'El hook <code>session_create_pre</code> comprueba la aprobación antes de crear la sesión',
    'msg_saved' => 'Configuración guardada correctamente.',
    'msg_keys_required' => 'Ambas claves (Site Key y Secret Key) son necesarias en modo producción.',
    'msg_disabled' => 'Turnstile desactivado. Página de inicio de sesión original restaurada.',
    'msg_sandbox' => 'Modo sandbox activo — usando claves de prueba de Cloudflare.',
];
