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
 * Cloudflare Turnstile — Français (fr)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'Protection CAPTCHA pour la page de connexion DirectAdmin',
    'mode' => 'Mode',
    'mode_prod' => 'Production',
    'mode_sandbox' => 'Bac à sable (test)',
    'mode_off' => 'Désactivé',
    'mode_prod_desc' => 'Protection active avec vos propres clés Cloudflare',
    'mode_sandbox_desc' => 'Clés de test Cloudflare — widget visible mais toujours validé',
    'mode_off_desc' => 'Turnstile désactivé — aucune protection CAPTCHA',
    'api_keys' => 'Clés API',
    'api_keys_desc' => 'Obtenez vos clés sur',
    'site_key' => 'Clé du site',
    'site_key_hint' => 'Clé publique — visible dans le code source',
    'secret_key' => 'Clé secrète',
    'secret_key_hint' => 'Clé privée — pour la vérification côté serveur',
    'advanced' => 'Avancé',
    'token_ttl' => 'TTL du jeton (secondes)',
    'token_ttl_hint' => 'Durée de validité de la vérification',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Oui — ne bloque pas si CF est indisponible',
    'fail_open_no' => 'Non — plus restrictif',
    'fail_open_hint' => 'Autoriser la connexion si Cloudflare est inaccessible',
    'save' => 'Enregistrer la configuration',
    'status_active' => 'Production',
    'status_sandbox' => 'Bac à sable',
    'status_off' => 'Désactivé',
    'login_patch' => 'Patch page de connexion',
    'active_verifications' => 'Vérifications actives',
    'how_it_works' => 'Fonctionnement',
    'step1' => 'L\'utilisateur ouvre la page de connexion DA → le widget Turnstile se charge automatiquement',
    'step2' => 'Cloudflare vérifie l\'utilisateur (challenge invisible ou interactif)',
    'step3' => 'Le jeton est envoyé au point de vérification sur <code>%s</code>',
    'step4' => 'Le serveur vérifie le jeton avec l\'API Cloudflare et enregistre l\'approbation IP',
    'step5' => 'Le hook <code>session_create_pre</code> vérifie l\'approbation avant la création de session',
    'msg_saved' => 'Configuration enregistrée avec succès.',
    'msg_keys_required' => 'Les deux clés (Site Key et Secret Key) sont requises en mode production.',
    'msg_disabled' => 'Turnstile désactivé. Page de connexion originale restaurée.',
    'msg_sandbox' => 'Mode bac à sable actif — clés de test Cloudflare utilisées.',
];
