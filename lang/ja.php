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
 * Cloudflare Turnstile — 日本語 (ja)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'DirectAdminログインページのCAPTCHA保護',
    'mode' => 'モード',
    'mode_prod' => '本番',
    'mode_sandbox' => 'サンドボックス（テスト）',
    'mode_off' => '無効',
    'mode_prod_desc' => '独自のCloudflareキーによるアクティブ保護',
    'mode_sandbox_desc' => 'Cloudflareテストキー — ウィジェットは表示されるが常に通過',
    'mode_off_desc' => 'Turnstile無効 — CAPTCHA保護なし',
    'api_keys' => 'APIキー',
    'api_keys_desc' => 'キーの取得先',
    'site_key' => 'サイトキー',
    'site_key_hint' => '公開キー — ページソースに表示',
    'secret_key' => 'シークレットキー',
    'secret_key_hint' => '秘密キー — サーバーサイド検証用',
    'advanced' => '詳細設定',
    'token_ttl' => 'トークンTTL（秒）',
    'token_ttl_hint' => '検証の有効期間',
    'fail_open' => 'フェイルオープン',
    'fail_open_yes' => 'はい — CFダウン時にブロックしない',
    'fail_open_no' => 'いいえ — より厳格',
    'fail_open_hint' => 'Cloudflare到達不能時にログインを許可',
    'save' => '設定を保存',
    'status_active' => '本番',
    'status_sandbox' => 'サンドボックス',
    'status_off' => '無効',
    'login_patch' => 'ログインページパッチ',
    'active_verifications' => 'アクティブな検証',
    'how_it_works' => '仕組み',
    'step1' => 'ユーザーがDAログインページを開く → Turnstileウィジェットが自動読み込み',
    'step2' => 'Cloudflareがユーザーを検証（不可視チャレンジまたはインタラクティブ）',
    'step3' => 'トークンが<code>%s</code>の検証エンドポイントに送信される',
    'step4' => 'サーバーがCloudflare APIでトークンを検証しIP承認を保存',
    'step5' => 'フック<code>session_create_pre</code>がセッション作成前に承認を確認',
    'msg_saved' => '設定が正常に保存されました。',
    'msg_keys_required' => '本番モードでは両方のキー（サイトキーとシークレットキー）が必要です。',
    'msg_disabled' => 'Turnstile無効。元のログインページが復元されました。',
    'msg_sandbox' => 'サンドボックスモード有効 — Cloudflareテストキーを使用中。',
];
