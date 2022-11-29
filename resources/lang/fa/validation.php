<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute باید پذیرفته شده باشد.',
    'active_url' => 'آدرس :attribute معتبر نیست',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخی بعد از :date، یا مطابق با آن باشد.',
    'alpha' => ':attribute باید فقط حروف الفبا باشد.',
    'alpha_dash' => ':attribute باید فقط حروف الفبا، عدد و خط تیره(-) باشد.',
    'alpha_num' => ':attribute باید فقط حروف الفبا و عدد باشد.',
    'array' => ':attribute باید آرایه باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی قبل از :date، یا مطابق با آن باشد.',
    'between' => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file' => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array' => ':attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean' => 'فیلد :attribute فقط می‌تواند صحیح و یا غلط باشد',
    'confirmed' => ':attribute با فیلد تکرار مطابقت ندارد.',
    'date' => ':attribute یک تاریخ معتبر نیست.',
    'date_format' => ':attribute با الگوی :format مطاقبت ندارد.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute قابل قبول نیست.',
    'distinct' => 'فیلد :attribute تکراری است.',
    'email' => ':attribute باید یک ایمیل معتبر باشد',
    'exists' => ':attribute انتخاب شده، معتبر نیست.',
    'file' => ':attribute باید یک فایل باشد',
    'filled' => 'فیلد :attribute الزامی است',
    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد',
        'file' => ':attribute باید بزرگتر از :value کیلوبایت باشد',
        'string' => ':attribute باید بزرگتر از :value کاراکتر باشد',
        'array' => ':attribute باید بزرگتر از :value آیتم باشد',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا مساوی از :value باشد',
        'file' => ':attribute باید بزرگتر یا مساوی از :value کیلوبایت باشد',
        'string' => ':attribute باید بزرگتر یا مساوی از :value کاراکتر باشد',
        'array' => ':attribute باید بزرگتر یا مساوی از :value آیتم باشد',
    ],
    'image' => 'فرمت تصویر ارسالی صحیح نمی باشد.',
    'in' => ':attribute انتخاب شده، معتبر نیست.',
    'in_array' => 'فیلد :attribute در :other وجود ندارد.',
    'integer' => ':attribute باید عدد صحیح باشد.',
    'ip' => ':attribute باید IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس معتبر از نوع IPv4 باشد.',
    'ipv6' => ':attribute باید یک آدرس معتبر از نوع IPv6 باشد.',
    'json' => 'فیلد :attribute باید یک رشته از نوع JSON باشد.',
    'lt' => [
        'numeric' => ':attribute باید کوچکتر از :value باشد',
        'file' => ':attribute باید کوچکتر از :value کیلوبایت باشد',
        'string' => ':attribute باید کوچکتر از :value کاراکتر باشد',
        'array' => ':attribute باید کوچکتر از :value آیتم باشد',
    ],
    'lte' => [
        'numeric' => ':attribute باید کوچکتر یا مساوی از :value باشد',
        'file' => ':attribute باید کوچکتر یا مساوی از :value کیلوبایت باشد',
        'string' => ':attribute باید کوچکتر یا مساوی از :value کاراکتر باشد',
        'array' => ':attribute باید کوچکتر یا مساوی از :value آیتم باشد',
    ],
    'max' => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        'array' => ':attribute نباید بیشتر از :max آیتم باشد.',
    ],
    'mimes' => ':attribute باید یکی از فرمت های :values باشد.',
    'mimetypes' => ':attribute باید یکی از فرمت های :values باشد.',
    'min' => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file' => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string' => ':attribute نباید کمتر از :min کاراکتر باشد.',
        'array' => ':attribute نباید کمتر از :min آیتم باشد.',
    ],
    'not_in' => ':attribute انتخاب شده، معتبر نیست.',
    'not_regex' => 'فرمت :attribute معتبر نیست.',
    'numeric' => ':attribute باید عدد باشد.',
    'present' => 'فیلد :attribute باید در پارامترهای ارسالی وجود داشته باشد.',
    'regex' => 'فرمت :attribute معتبر نیست',
    'required' => 'پر کردن فیلد :attribute ضروری است.',
    'required_if' => 'هنگامی که :other برابر با :value است، فیلد :attribute الزامی است.',
    'required_unless' => 'فیلد :attribute ضروری است، مگر آنکه :other در :values موجود باشد.',
    'required_with' => 'در صورت وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_with_all' => 'در صورت وجود فیلدهای :values، فیلد :attribute الزامی است.',
    'required_without' => 'در صورت عدم وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_without_all' => 'در صورت عدم وجود هر یک از فیلدهای :values، فیلد :attribute الزامی است.',
    'same' => ':attribute و :other باید مانند هم باشند.',
    'size' => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file' => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string' => ':attribute باید برابر با :size کاراکتر باشد.',
        'array' => ':attribute باسد شامل :size آیتم باشد.',
    ],
    'string' => 'فیلد :attribute باید متن باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی قابل قبول باشد.',
    'unique' => 'این :attribute قبلا ثبت شده است.',
    'uploaded' => 'آپلود فایل :attribute موفقیت آمیز نبود.',
    'url' => 'فرمت آدرس :attribute اشتباه است.',
    'expired' => 'زمان استفاده از :attribute تمام شده است.',
    'wrong' => ':attribute اشتباه است.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'g-recaptcha-response' => [
            'required' => 'لطفا مشخص کنید که ربات نیستید!',
            'captcha' => 'خطای تشخیص ربات!',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'username' => 'نام کاربری',
        'email' => 'ایمیل',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'password' => 'رمز عبور',
        'dynamic_password' => 'کد یک بار مصرف',
        'password_confirmation' => 'تکرار رمز عبور',
        'city' => 'شهر',
        'country' => 'کشور',
        'address' => 'نشانی',
        'phone' => 'شماره ثابت',
        'mobile' => 'شماره همراه',
        'age' => 'سن',
        'sex' => 'جنسیت',
        'gender' => 'جنسیت',
        'day' => 'روز',
        'month' => 'ماه',
        'year' => 'سال',
        'hour' => 'ساعت',
        'minute' => 'دقیقه',
        'second' => 'ثانیه',
        'title' => 'عنوان',
        'text' => 'متن',
        'content' => 'محتوا',
        'description' => 'توضیحات',
        'excerpt' => 'گزیده مطلب',
        'date' => 'تاریخ',
        'time' => 'زمان',
        'available' => 'موجود',
        'size' => 'اندازه',
        'terms' => 'شرایط',
        'province' => 'استان',
        'logo' => 'لوگو',
        'points' => 'امتیاز',
        'credit' => 'امتیاز',
        'permission' => 'سطح دسترسی',
        'upload_file' => 'فایل ارسالی',
        'question' => 'سوال',
        'answers' => 'گزینه ها',
        'true_answer' => 'پاسخ صحیح',
        'expire_date' => 'تاریخ اتمام',
        'connection_mobile' => 'موبایل',
        'connection_name' => 'نام رابط',
        'role' => 'سطح کاربر',
        'photo' => 'تصویر',
        'agency_id' => 'آژانس',
        'company_id' => 'شرکت',
        'serial' => 'کد قرعه کشی',
        'remember_token' => 'کد ثبت سریال',
        'main_serial' => 'کد قرعه کشی',
        'firstname' => 'نام',
        'surname' => 'نام خانوادگی',
        'number' => 'شماره',
        'end_date' => 'تاریخ اتمام',
        'award' => 'جایزه',
        'start_at' => 'تاریخ شروع',
        'end_at' => 'تاریخ اتمام',
        'run_at' => 'تاریخ اجرا',
        'runs_count' => 'تعداد اجرا',
        'subject' => 'موضوع',
        'token' => 'رمز عبور موقت',
        'chances' => 'شانس'
    ],
];
