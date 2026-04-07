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
 * Cloudflare Turnstile — العربية (ar)
 * Language file for DirectAdmin plugin
 */
return [
    'title' => 'Cloudflare Turnstile',
    'subtitle' => 'حماية CAPTCHA لصفحة تسجيل الدخول في DirectAdmin',
    'mode' => 'الوضع',
    'mode_prod' => 'إنتاج',
    'mode_sandbox' => 'بيئة تجريبية (اختبار)',
    'mode_off' => 'معطّل',
    'mode_prod_desc' => 'حماية نشطة بمفاتيح Cloudflare الخاصة بك',
    'mode_sandbox_desc' => 'مفاتيح اختبار Cloudflare — الأداة مرئية لكنها تمرر دائماً',
    'mode_off_desc' => 'Turnstile معطّل — بدون حماية CAPTCHA',
    'api_keys' => 'مفاتيح API',
    'api_keys_desc' => 'احصل على مفاتيحك من',
    'site_key' => 'مفتاح الموقع',
    'site_key_hint' => 'مفتاح عام — مرئي في شفرة المصدر',
    'secret_key' => 'المفتاح السري',
    'secret_key_hint' => 'مفتاح خاص — للتحقق من جانب الخادم',
    'advanced' => 'متقدم',
    'token_ttl' => 'مدة صلاحية الرمز (ثوانٍ)',
    'token_ttl_hint' => 'مدة بقاء التحقق صالحاً',
    'fail_open' => 'Fail-open',
    'fail_open_yes' => 'نعم — لا يحظر إذا كان CF غير متاح',
    'fail_open_no' => 'لا — أكثر تقييداً',
    'fail_open_hint' => 'السماح بتسجيل الدخول عندما يكون Cloudflare غير متاح',
    'save' => 'حفظ الإعدادات',
    'status_active' => 'إنتاج',
    'status_sandbox' => 'بيئة تجريبية',
    'status_off' => 'معطّل',
    'login_patch' => 'تصحيح صفحة تسجيل الدخول',
    'active_verifications' => 'عمليات التحقق النشطة',
    'how_it_works' => 'كيف يعمل',
    'step1' => 'يفتح المستخدم صفحة تسجيل الدخول في DA ← تُحمّل أداة Turnstile تلقائياً',
    'step2' => 'يتحقق Cloudflare من المستخدم (تحدٍّ غير مرئي أو تفاعلي)',
    'step3' => 'يُرسل الرمز إلى نقطة التحقق على <code>%s</code>',
    'step4' => 'يتحقق الخادم من الرمز عبر Cloudflare API ويحفظ موافقة IP',
    'step5' => 'يتحقق الخطّاف <code>session_create_pre</code> من الموافقة قبل إنشاء الجلسة',
    'msg_saved' => 'تم حفظ الإعدادات بنجاح.',
    'msg_keys_required' => 'كلا المفتاحين (مفتاح الموقع والمفتاح السري) مطلوبان في وضع الإنتاج.',
    'msg_disabled' => 'Turnstile معطّل. تمت استعادة صفحة تسجيل الدخول الأصلية.',
    'msg_sandbox' => 'وضع البيئة التجريبية نشط — يتم استخدام مفاتيح اختبار Cloudflare.',
];
