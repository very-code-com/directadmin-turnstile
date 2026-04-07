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
 * Cloudflare Turnstile — Ελληνικά (el)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'Προστασία CAPTCHA για τη σελίδα σύνδεσης DirectAdmin',
    'mode' => 'Λειτουργία',
    'mode_prod' => 'Παραγωγή',
    'mode_sandbox' => 'Sandbox (δοκιμή)',
    'mode_off' => 'Απενεργοποιημένο',
    'mode_prod_desc' => 'Ενεργή προστασία με τα δικά σας κλειδιά Cloudflare',
    'mode_sandbox_desc' => 'Δοκιμαστικά κλειδιά Cloudflare — widget ορατό αλλά πάντα περνάει',
    'mode_off_desc' => 'Turnstile απενεργοποιημένο — χωρίς προστασία CAPTCHA',
    'api_keys' => 'Κλειδιά API',
    'api_keys_desc' => 'Αποκτήστε τα κλειδιά σας από',
    'site_key' => 'Site Key',
    'site_key_hint' => 'Δημόσιο κλειδί — ορατό στον πηγαίο κώδικα',
    'secret_key' => 'Secret Key',
    'secret_key_hint' => 'Ιδιωτικό κλειδί — για επαλήθευση στον διακομιστή',
    'advanced' => 'Προχωρημένα',
    'token_ttl' => 'TTL token (δευτερόλεπτα)',
    'token_ttl_hint' => 'Πόσο διαρκεί η εγκυρότητα της επαλήθευσης',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'Ναι — δεν αποκλείει αν το CF δεν είναι διαθέσιμο',
    'fail_open_no' => 'Όχι — πιο αυστηρό',
    'fail_open_hint' => 'Επιτρέπει σύνδεση όταν το Cloudflare δεν είναι προσβάσιμο',
    'save' => 'Αποθήκευση ρυθμίσεων',
    'status_active' => 'Παραγωγή',
    'status_sandbox' => 'Sandbox',
    'status_off' => 'Απενεργοποιημένο',
    'login_patch' => 'Patch σελίδας σύνδεσης',
    'active_verifications' => 'Ενεργές επαληθεύσεις',
    'how_it_works' => 'Πώς λειτουργεί',
    'step1' => 'Ο χρήστης ανοίγει τη σελίδα σύνδεσης DA → το widget Turnstile φορτώνεται αυτόματα',
    'step2' => 'Το Cloudflare επαληθεύει τον χρήστη (αόρατη ή διαδραστική πρόκληση)',
    'step3' => 'Το token αποστέλλεται στο σημείο επαλήθευσης στο <code>%s</code>',
    'step4' => 'Ο διακομιστής επαληθεύει το token με το Cloudflare API και αποθηκεύει την έγκριση IP',
    'step5' => 'Το hook <code>session_create_pre</code> ελέγχει την έγκριση πριν τη δημιουργία συνεδρίας',
    'msg_saved' => 'Οι ρυθμίσεις αποθηκεύτηκαν επιτυχώς.',
    'msg_keys_required' => 'Και τα δύο κλειδιά (Site Key και Secret Key) απαιτούνται σε λειτουργία παραγωγής.',
    'msg_disabled' => 'Turnstile απενεργοποιημένο. Η αρχική σελίδα σύνδεσης αποκαταστάθηκε.',
    'msg_sandbox' => 'Λειτουργία sandbox ενεργή — χρησιμοποιούνται δοκιμαστικά κλειδιά Cloudflare.',
];
