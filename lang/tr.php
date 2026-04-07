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
 * Cloudflare Turnstile — Türkçe (tr)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'DirectAdmin giriş sayfası için CAPTCHA koruması',
    'mode' => 'Mod',
    'mode_prod' => 'Üretim',
    'mode_sandbox' => 'Sandbox (test)',
    'mode_off' => 'Devre dışı',
    'mode_prod_desc' => 'Kendi Cloudflare anahtarlarınızla aktif koruma',
    'mode_sandbox_desc' => 'Cloudflare test anahtarları — widget görünür ama her zaman geçer',
    'mode_off_desc' => 'Turnstile devre dışı — CAPTCHA koruması yok',
    'api_keys' => 'API Anahtarları',
    'api_keys_desc' => 'Anahtarlarınızı şuradan alın',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Genel anahtar — sayfa kaynağında görünür',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Özel anahtar — sunucu tarafı doğrulama için',
    'advanced' => 'Gelişmiş',
    'token_ttl' => 'Token TTL (saniye)',
    'token_ttl_hint' => 'Doğrulamanın ne kadar süre geçerli kalacağı',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Evet — CF erişilemezse engellenmez',
    'fail_open_no' => 'Hayır — daha kısıtlayıcı',
    'fail_open_hint' => 'Cloudflare erişilemezken girişe izin ver',
    'save' => 'Yapılandırmayı kaydet',
    'status_active' => 'Üretim',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Devre dışı',
    'login_patch' => 'Giriş sayfası yaması',
    'active_verifications' => 'Aktif doğrulamalar',
    'how_it_works' => 'Nasıl çalışır',
    'step1' => 'Kullanıcı DA giriş sayfasını açar → Turnstile widget\'ı otomatik yüklenir',
    'step2' => 'Cloudflare kullanıcıyı doğrular (görünmez veya etkileşimli test)',
    'step3' => 'Token, <code>%s</code> üzerindeki doğrulama noktasına gönderilir',
    'step4' => 'Sunucu, Cloudflare API ile token\'ı doğrular ve IP onayını kaydeder',
    'step5' => 'Hook <code>session_create_pre</code> oturum oluşturmadan önce onayı kontrol eder',
    'msg_saved' => 'Yapılandırma başarıyla kaydedildi.',
    'msg_keys_required' => 'Üretim modunda her iki anahtar (Site Key ve Secret Key) gereklidir.',
    'msg_disabled' => 'Turnstile devre dışı. Orijinal giriş sayfası geri yüklendi.',
    'msg_sandbox' => 'Sandbox modu aktif — Cloudflare test anahtarları kullanılıyor.',
];
