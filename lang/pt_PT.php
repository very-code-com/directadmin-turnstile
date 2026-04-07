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
 * Cloudflare Turnstile — Português (Portugal) (pt_PT)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'Proteção CAPTCHA para a página de início de sessão do DirectAdmin',
    'mode' => 'Modo',
    'mode_prod' => 'Produção',
    'mode_sandbox' => 'Sandbox (teste)',
    'mode_off' => 'Desativado',
    'mode_prod_desc' => 'Proteção ativa com as suas próprias chaves Cloudflare',
    'mode_sandbox_desc' => 'Chaves de teste Cloudflare — widget visível mas sempre aprovado',
    'mode_off_desc' => 'Turnstile desativado — sem proteção CAPTCHA',
    'api_keys' => 'Chaves API',
    'api_keys_desc' => 'Obtenha as suas chaves em',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Chave pública — visível no código-fonte',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Chave privada — para verificação no servidor',
    'advanced' => 'Avançado',
    'token_ttl' => 'TTL do token (segundos)',
    'token_ttl_hint' => 'Quanto tempo a verificação permanece válida',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Sim — não bloqueia se CF estiver indisponível',
    'fail_open_no' => 'Não — mais restritivo',
    'fail_open_hint' => 'Permitir início de sessão quando Cloudflare estiver inacessível',
    'save' => 'Guardar configuração',
    'status_active' => 'Produção',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Desativado',
    'login_patch' => 'Patch da página de início de sessão',
    'active_verifications' => 'Verificações ativas',
    'how_it_works' => 'Como funciona',
    'step1' => 'O utilizador abre a página de início de sessão do DA → widget Turnstile carrega automaticamente',
    'step2' => 'Cloudflare verifica o utilizador (desafio invisível ou interativo)',
    'step3' => 'O token é enviado ao endpoint de verificação em <code>%s</code>',
    'step4' => 'O servidor verifica o token com a API Cloudflare e guarda a aprovação do IP',
    'step5' => 'O hook <code>session_create_pre</code> verifica aprovação antes da criação da sessão',
    'msg_saved' => 'Configuração guardada com sucesso.',
    'msg_keys_required' => 'Ambas as chaves (Site Key e Secret Key) são necessárias no modo produção.',
    'msg_disabled' => 'Turnstile desativado. Página de início de sessão original restaurada.',
    'msg_sandbox' => 'Modo sandbox ativo — a usar chaves de teste Cloudflare.',
];
