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
 * Cloudflare Turnstile — 繁體中文 (zh_TW)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'DirectAdmin 登入頁面的 CAPTCHA 保護',
    'mode' => '模式',
    'mode_prod' => '正式環境',
    'mode_sandbox' => '沙箱（測試）',
    'mode_off' => '已停用',
    'mode_prod_desc' => '使用您自己的 Cloudflare 金鑰進行主動保護',
    'mode_sandbox_desc' => 'Cloudflare 測試金鑰 — 小工具可見但始終通過',
    'mode_off_desc' => 'Turnstile 已停用 — 無 CAPTCHA 保護',
    'api_keys' => 'API 金鑰',
    'api_keys_desc' => '從以下網址取得金鑰',
    'site_key' => '網站金鑰',
    'site_key_hint' => '公鑰 — 在頁面原始碼中可見',
    'secret_key' => '密鑰',
    'secret_key_hint' => '私鑰 — 用於伺服器端驗證',
    'advanced' => '進階',
    'token_ttl' => '權杖有效期（秒）',
    'token_ttl_hint' => '驗證保持有效的時長',
    'fail_open' => '故障開放',
    'fail_open_yes' => '是 — CF 無法使用時不會阻止登入',
    'fail_open_no' => '否 — 更嚴格',
    'fail_open_hint' => 'Cloudflare 無法連線時允許登入',
    'save' => '儲存設定',
    'status_active' => '正式環境',
    'status_sandbox' => '沙箱',
    'status_off' => '已停用',
    'login_patch' => '登入頁面修補',
    'active_verifications' => '活躍驗證',
    'how_it_works' => '運作方式',
    'step1' => '使用者開啟 DA 登入頁面 → Turnstile 小工具自動載入',
    'step2' => 'Cloudflare 驗證使用者（隱形挑戰或互動式）',
    'step3' => '權杖傳送到 <code>%s</code> 上的驗證端點',
    'step4' => '伺服器透過 Cloudflare API 驗證權杖並儲存 IP 核准',
    'step5' => '鉤子 <code>session_create_pre</code> 在建立工作階段前檢查核准',
    'msg_saved' => '設定儲存成功。',
    'msg_keys_required' => '正式模式需要兩個金鑰（網站金鑰和密鑰）。',
    'msg_disabled' => 'Turnstile 已停用。原始登入頁面已恢復。',
    'msg_sandbox' => '沙箱模式已啟動 — 使用 Cloudflare 測試金鑰。',
];
