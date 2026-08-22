<?php

return [

    /*
    |--------------------------------------------------------------------------
    | خطوط زبان اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | خطوط زبان زیر شامل پیام‌های خطای پیش‌فرض مورد استفاده توسط
    | کلاس اعتبارسنجی لاراول هستند. برخی قوانین مانند قوانین مربوط
    | به اندازه، چندین نسخه دارند. می‌توانید این پیام‌ها را تغییر دهید.
    |
    */

    'accepted' => 'فیلد :attribute باید پذیرفته شده باشد.',
    'accepted_if' => 'فیلد :attribute زمانی که :other برابر :value است باید پذیرفته شده باشد.',
    'active_url' => 'فیلد :attribute باید یک آدرس URL معتبر باشد.',
    'after' => 'فیلد :attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'فیلد :attribute باید تاریخی بعد یا برابر با :date باشد.',
    'alpha' => 'فیلد :attribute فقط باید شامل حروف باشد.',
    'alpha_dash' => 'فیلد :attribute فقط باید شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => 'فیلد :attribute فقط باید شامل حروف و اعداد باشد.',
    'any_of' => 'فیلد :attribute معتبر نیست.',
    'array' => 'فیلد :attribute باید یک آرایه باشد.',
    'ascii' => 'فیلد :attribute فقط باید شامل کاراکترهای تک‌بایتی، حروف، اعداد و نمادها باشد.',
    'base64' => 'فیلد :attribute باید یک رشته Base64 معتبر باشد.',
    'before' => 'فیلد :attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'فیلد :attribute باید تاریخی قبل یا برابر با :date باشد.',

    'between' => [
        'array' => 'فیلد :attribute باید بین :min تا :max مقدار داشته باشد.',
        'file' => 'فیلد :attribute باید بین :min تا :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بین :min و :max باشد.',
        'string' => 'فیلد :attribute باید بین :min و :max کاراکتر باشد.',
    ],

    'boolean' => 'فیلد :attribute باید درست یا نادرست باشد.',
    'can' => 'فیلد :attribute شامل مقداری غیرمجاز است.',
    'confirmed' => 'تأییدیه فیلد :attribute مطابقت ندارد.',
    'contains' => 'فیلد :attribute فاقد مقدار مورد نیاز است.',
    'current_password' => 'رمز عبور صحیح نیست.',
    'date' => 'فیلد :attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => 'فیلد :attribute باید برابر با تاریخ :date باشد.',
    'date_format' => 'فرمت فیلد :attribute باید مطابق فرمت :format باشد.',
    'decimal' => 'فیلد :attribute باید دارای :decimal رقم اعشار باشد.',
    'declined' => 'فیلد :attribute باید رد شده باشد.',
    'declined_if' => 'فیلد :attribute زمانی که :other برابر :value است باید رد شده باشد.',
    'different' => 'فیلد :attribute و :other باید متفاوت باشند.',
    'digits' => 'فیلد :attribute باید :digits رقم داشته باشد.',
    'digits_between' => 'فیلد :attribute باید بین :min و :max رقم داشته باشد.',
    'dimensions' => 'ابعاد تصویر فیلد :attribute معتبر نیست.',
    'distinct' => 'فیلد :attribute دارای مقدار تکراری است.',
    'doesnt_contain' => 'فیلد :attribute نباید شامل هیچ‌کدام از موارد زیر باشد: :values.',
    'doesnt_end_with' => 'فیلد :attribute نباید با یکی از موارد زیر پایان یابد: :values.',
    'doesnt_start_with' => 'فیلد :attribute نباید با یکی از موارد زیر شروع شود: :values.',
    'email' => 'فیلد :attribute باید یک آدرس ایمیل معتبر باشد.',
    'encoding' => 'فیلد :attribute باید با رمزگذاری :encoding باشد.',
    'ends_with' => 'فیلد :attribute باید با یکی از موارد زیر پایان یابد: :values.',
    'enum' => 'مقدار انتخاب‌شده برای :attribute معتبر نیست.',
    'exists' => 'مقدار انتخاب‌شده برای :attribute معتبر نیست.',
    'extensions' => 'فیلد :attribute باید یکی از پسوندهای زیر را داشته باشد: :values.',
    'file' => 'فیلد :attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید دارای مقدار باشد.',
    'gt' => [
        'array' => 'فیلد :attribute باید بیشتر از :value مقدار داشته باشد.',
        'file' => 'فایل :attribute باید بزرگ‌تر از :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید بزرگ‌تر از :value باشد.',
        'string' => 'فیلد :attribute باید بیشتر از :value کاراکتر داشته باشد.',
    ],

    'gte' => [
        'array' => 'فیلد :attribute باید حداقل :value مقدار داشته باشد.',
        'file' => 'فایل :attribute باید بزرگ‌تر یا مساوی با :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید بزرگ‌تر یا مساوی با :value باشد.',
        'string' => 'فیلد :attribute باید حداقل :value کاراکتر داشته باشد.',
    ],

    'hex_color' => 'فیلد :attribute باید یک رنگ هگزادسیمال معتبر باشد.',
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'in' => 'مقدار انتخاب‌شده برای :attribute معتبر نیست.',
    'in_array' => 'فیلد :attribute باید در :other وجود داشته باشد.',
    'in_array_keys' => 'فیلد :attribute باید حداقل یکی از کلیدهای زیر را داشته باشد: :values.',
    'integer' => 'فیلد :attribute باید یک عدد صحیح باشد.',
    'ip' => 'فیلد :attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => 'فیلد :attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => 'فیلد :attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
    'list' => 'فیلد :attribute باید یک لیست باشد.',
    'lowercase' => 'فیلد :attribute باید با حروف کوچک باشد.',

    'lt' => [
        'array' => 'فیلد :attribute باید کمتر از :value مقدار داشته باشد.',
        'file' => 'فایل :attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید کمتر از :value باشد.',
        'string' => 'فیلد :attribute باید کمتر از :value کاراکتر داشته باشد.',
    ],

    'lte' => [
        'array' => 'فیلد :attribute نباید بیشتر از :value مقدار داشته باشد.',
        'file' => 'فایل :attribute باید کمتر یا مساوی با :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید کمتر یا مساوی با :value باشد.',
        'string' => 'فیلد :attribute باید کمتر یا مساوی با :value کاراکتر داشته باشد.',
    ],

    'mac_address' => 'فیلد :attribute باید یک آدرس MAC معتبر باشد.',

    'max' => [
        'array' => 'فیلد :attribute نباید بیشتر از :max مقدار داشته باشد.',
        'file' => 'فایل :attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute نباید بیشتر از :max باشد.',
        'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر داشته باشد.',
    ],

    'max_digits' => 'فیلد :attribute نباید بیشتر از :max رقم داشته باشد.',
    'mimes' => 'فیلد :attribute باید یک فایل از نوع‌های زیر باشد: :values.',
    'mimetypes' => 'فیلد :attribute باید یک فایل از نوع‌های زیر باشد: :values.',

    'min' => [
        'array' => 'فیلد :attribute باید حداقل :min مقدار داشته باشد.',
        'file' => 'فایل :attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید حداقل :min باشد.',
        'string' => 'فیلد :attribute باید حداقل :min کاراکتر داشته باشد.',
    ],

    'min_digits' => 'فیلد :attribute باید حداقل :min رقم داشته باشد.',
    'missing' => 'فیلد :attribute نباید وجود داشته باشد.',
    'missing_if' => 'فیلد :attribute زمانی که :other برابر :value است نباید وجود داشته باشد.',
    'missing_unless' => 'فیلد :attribute باید وجود نداشته باشد مگر اینکه :other برابر :value باشد.',
    'missing_with' => 'فیلد :attribute زمانی که :values وجود دارد نباید وجود داشته باشد.',
    'missing_with_all' => 'فیلد :attribute زمانی که :values وجود دارند نباید وجود داشته باشد.',
    'multiple_of' => 'فیلد :attribute باید مضربی از :value باشد.',
    'not_in' => 'مقدار انتخاب‌شده برای :attribute معتبر نیست.',
    'not_regex' => 'فرمت فیلد :attribute معتبر نیست.',
    'numeric' => 'فیلد :attribute باید عدد باشد.',
    'password' => [
        'letters' => 'فیلد :attribute باید حداقل شامل یک حرف باشد.',
        'mixed' => 'فیلد :attribute باید حداقل شامل یک حرف بزرگ و یک حرف کوچک باشد.',
        'numbers' => 'فیلد :attribute باید حداقل شامل یک عدد باشد.',
        'symbols' => 'فیلد :attribute باید حداقل شامل یک نماد باشد.',
        'uncompromised' => 'مقدار وارد شده برای :attribute در نشت اطلاعاتی مشاهده شده است. لطفاً یک :attribute دیگر انتخاب کنید.',
    ],

    'present' => 'فیلد :attribute باید وجود داشته باشد.',
    'present_if' => 'فیلد :attribute زمانی که :other برابر :value است باید وجود داشته باشد.',
    'present_unless' => 'فیلد :attribute باید وجود داشته باشد مگر اینکه :other برابر :value باشد.',
    'present_with' => 'فیلد :attribute زمانی که :values وجود دارد باید وجود داشته باشد.',
    'present_with_all' => 'فیلد :attribute زمانی که :values وجود دارند باید وجود داشته باشد.',

    'prohibited' => 'فیلد :attribute ممنوع است.',
    'prohibited_if' => 'فیلد :attribute زمانی که :other برابر :value است ممنوع است.',
    'prohibited_if_accepted' => 'فیلد :attribute زمانی که :other پذیرفته شده است ممنوع است.',
    'prohibited_if_declined' => 'فیلد :attribute زمانی که :other رد شده است ممنوع است.',
    'prohibited_unless' => 'فیلد :attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits' => 'فیلد :attribute مانع وجود داشتن :other می‌شود.',

    'regex' => 'فرمت فیلد :attribute معتبر نیست.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_array_keys' => 'فیلد :attribute باید شامل موارد زیر باشد: :values.',
    'required_if' => 'فیلد :attribute زمانی که :other برابر :value است الزامی است.',
    'required_if_accepted' => 'فیلد :attribute زمانی که :other پذیرفته شده است الزامی است.',
    'required_if_declined' => 'فیلد :attribute زمانی که :other رد شده است الزامی است.',
    'required_unless' => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => 'فیلد :attribute زمانی که :values وجود دارد الزامی است.',
    'required_with_all' => 'فیلد :attribute زمانی که :values وجود دارند الزامی است.',
    'required_without' => 'فیلد :attribute زمانی که :values وجود ندارد الزامی است.',
    'required_without_all' => 'فیلد :attribute زمانی که هیچ‌کدام از :values وجود ندارند الزامی است.',

    'same' => 'فیلد :attribute باید با :other مطابقت داشته باشد.',

    'size' => [
        'array' => 'فیلد :attribute باید شامل :size مقدار باشد.',
        'file' => 'فایل :attribute باید :size کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید :size باشد.',
        'string' => 'فیلد :attribute باید :size کاراکتر داشته باشد.',
    ],

    'starts_with' => 'فیلد :attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string' => 'فیلد :attribute باید یک رشته باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => 'مقدار وارد شده برای :attribute قبلاً ثبت شده است.',
    'uploaded' => 'آپلود فیلد :attribute ناموفق بود.',
    'uppercase' => 'فیلد :attribute باید با حروف بزرگ باشد.',
    'url' => 'فیلد :attribute باید یک آدرس URL معتبر باشد.',
    'ulid' => 'فیلد :attribute باید یک ULID معتبر باشد.',
    'uuid' => 'فیلد :attribute باید یک UUID معتبر باشد.',


    /*
    |--------------------------------------------------------------------------
    | خطوط زبان اعتبارسنجی سفارشی
    |--------------------------------------------------------------------------
    |
    | در این قسمت می‌توانید پیام‌های اعتبارسنجی سفارشی برای فیلدها تعریف کنید.
    | قالب نام‌گذاری به صورت "attribute.rule" است.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'پیام سفارشی',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | ویژگی‌های سفارشی اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | خطوط زیر برای جایگزین کردن نام فیلدها با عبارات خواناتر استفاده می‌شوند.
    | برای مثال نمایش "آدرس ایمیل" به جای "email".
    |
    */

    'attributes' => [
        'name' => 'نام کامل',
        'email' => 'پست الکترونیکی',
        'password' => 'گذرواژه',
        'password_confirmation' => 'تایید گذرواژه'
    ],

];
