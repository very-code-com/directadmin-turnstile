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
 * Cloudflare Turnstile — 简体中文 (zh_CN)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'DirectAdmin 登录页面的 CAPTCHA 保护',
    'mode' => '模式',
    'mode_prod' => '生产环境',
    'mode_sandbox' => '沙箱（测试）',
    'mode_off' => '已禁用',
    'mode_prod_desc' => '使用您自己的 Cloudflare 密钥进行主动保护',
    'mode_sandbox_desc' => 'Cloudflare 测试密钥 — 小部件可见但始终通过',
    'mode_off_desc' => 'Turnstile 已禁用 — 无 CAPTCHA 保护',
    'api_keys' => 'API 密钥',
    'api_keys_desc' => '从以下网址获取密钥',
    'site_key' => '站点密钥',
    'site_key_hint' => '公钥 — 在页面源代码中可见',
    'secret_key' => '密钥',
    'secret_key_hint' => '私钥 — 用于服务器端验证',
    'advanced' => '高级',
    'token_ttl' => '令牌有效期（秒）',
    'token_ttl_hint' => '验证保持有效的时长',
    'fail_open' => '故障开放',
    'fail_open_yes' => '是 — CF 不可用时不会阻止登录',
    'fail_open_no' => '否 — 更严格',
    'fail_open_hint' => 'Cloudflare 不可达时允许登录',
    'save' => '保存配置',
    'status_active' => '生产环境',
    'status_sandbox' => '沙箱',
    'status_off' => '已禁用',
    'login_patch' => '登录页面补丁',
    'active_verifications' => '活跃验证',
    'how_it_works' => '工作原理',
    'step1' => '用户打开 DA 登录页面 → Turnstile 小部件自动加载',
    'step2' => 'Cloudflare 验证用户（隐形挑战或交互式）',
    'step3' => '令牌发送到 <code>%s</code> 上的验证端点',
    'step4' => '服务器通过 Cloudflare API 验证令牌并保存 IP 批准',
    'step5' => '钩子 <code>session_create_pre</code> 在创建会话前检查批准',
    'msg_saved' => '配置保存成功。',
    'msg_keys_required' => '生产模式需要两个密钥（站点密钥和密钥）。',
    'msg_disabled' => 'Turnstile 已禁用。原始登录页面已恢复。',
    'msg_sandbox' => '沙箱模式已激活 — 使用 Cloudflare 测试密钥。',
];
