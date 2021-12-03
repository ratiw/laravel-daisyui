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

    'accepted' => ':attribute ต้องผ่านการยอมรับก่อน',
    'accepted_if' => ':attribute ต้องผ่านการยอมรับเมื่อ :other เท่ากับ :value',
    'active_url' => ':attribute ต้องเป็น URL',
    'after' => ':attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal' => ':attribute ต้องเป็นวันที่ตั้งแต่ :date เป็นต้นไป',
    'alpha' => ':attribute ต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้น',
    'alpha_dash' => ':attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข และ _ เท่านั้น',
    'alpha_num' => ':attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข เท่านั้น',
    'array' => ':attribute ต้องเป็น array เท่านั้น',
    'before' => ':attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => ':attribute ต้องเป็นวันที่ก่อนหน้า หรือจนถึงวันที่ :date',
    'between' => [
        'numeric' => ':attribute ต้องมีค่าอยู่ระหว่าง :min ถึง :max',
        'file' => ':attribute ต้องมีขนาดระหว่าง :min ถึง :max กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวระหว่าง :min ถึง :max ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนระหว่าง :min ถึง :max',
    ],
    'boolean' => ':attribute ต้องเป็นจริง หรือเท็จ เท่านั้น',
    'confirmed' => ':attribute ไม่ตรงกัน',
    'current_password' => 'รหัสผ่านไม่ถูกต้อง',
    'date' => ':attribute ค่าวันที่ไม่ถูกต้อง',
    'date_equals' => ':attribute ต้องมีค่าวันที่เท่ากับ :date',
    'date_format' => ':attribute มีค่าไม่ตรงกับรูปแบบ :format.',
    'different' => ':attribute และ :other ต้องมีค่าต่างกัน',
    'digits' => ':attribute ต้องมี :digits หลัก',
    'digits_between' => ':attribute ต้องมีความยาวอยู่ระหว่าง :min ถึง :max หลัก',
    'dimensions' => ':attribute มีสัดส่วนของรูปภาพไม่ตรงตามที่กำหนด',
    'distinct' => ':attribute มีค่าที่ซ้ำกัน',
    'email' => ':attribute ไม่ถูกต้อง',
    'ends_with' => ':attribute ต้องลงท้ายด้วย: :values',
    'exists' => ':attribute ที่ระบุไม่ถูกต้อง',
    'file' => ':attribute ต้องเป็นไฟล์',
    'filled' => ':attribute ต้องระบุค่า',
    'gt' => [
        'numeric' => ':attribute ต้องมีค่ามากกว่า :value',
        'file' => ':attribute ต้องมีขนาดมากกว่า :value กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวมากกว่า :value ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนมากกว่า :value',
    ],
    'gte' => [
        'numeric' => ':attribute ต้องมีค่ามากกว่าหรือเท่ากับ :value',
        'file' => ':attribute ต้องมีขนาดมากกว่าหรือเท่ากับ :value กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวมากกว่าหรือเท่ากับ :value ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนมากกว่าหรือเท่ากับ :value',
    ],
    'image' => ':attribute ต้องเป็นรูปภาพ',
    'in' => ':attribute ที่เลือก ไช้ไม่ได้',
    'in_array' => ':attribute ที่ระบุ ไม่อยู่ในรายการ :other.',
    'integer' => ':attribute ต้องเป็นเลขจำนวนเต็ม',
    'ip' => ':attribute ต้องเป็น IP แอดเดรสที่ใช้ได้',
    'ipv4' => ':attribute ต้องเป็น IPv4 แอดเดรสที่ใช้ได้',
    'ipv6' => ':attribute ต้องเป็น IPv6 แอดเดรสที่ใช้ได้',
    'json' => ':attribute ต้องเป็นอักขระแบบ JSON ที่ถูกต้อง',
    'lt' => [
        'numeric' => ':attribute ต้องมีค่าน้อยกว่า :value',
        'file' => ':attribute ต้องมีขนาดน้อยกว่า :value กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวน้อยกว่า :value ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนน้อยกว่า :value',
    ],
    'lte' => [
        'numeric' => ':attribute ต้องมีค่าน้อยกว่าหรือเท่ากับ :value.',
        'file' => ':attribute ต้องมีขนาดน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวน้อยกว่าหรือเท่ากับ :value ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนไม่เกิน :value',
    ],
    'max' => [
        'numeric' => ':attribute ต้องมีค่าไม่เกิน :max',
        'file' => ':attribute ต้องมีขนาดไม่เกิน :max กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวไม่เกิน :max ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนไม่เกิน :max',
    ],
    'mimes' => ':attribute ต้องเป็นชนิดไฟล์: :values',
    'mimetypes' => ':attribute ต้องเป็นชนิดไฟล์: :values',
    'min' => [
        'numeric' => ':attribute ต้องมีค่าไม่น้อยกว่า :min',
        'file' => ':attribute ต้องมีขนาดไม่น้อยกว่า :min กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวอย่างน้อย :min ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนไม่น้อยกว่า :min',
    ],
    'multiple_of' => ':attribute จะต้องมีค่าเป็นจำนวนเท่า (multiple of) ของ :value',
    'not_in' => ':attribute ที่เลือกนั้น ไม่สามารถใช้ได้',
    'not_regex' => ':attribute ต้องไม่มีรูปแบบตามที่กำหนดไว้',
    'numeric' => ':attribute ต้องเป็นตัวเลข',
    'password' => 'รหัสผ่านไม่ถูกต้อง',
    'present' => 'ต้องมี :attribute อยู่ด้วย',
    'regex' => ':attribute ต้องมีรูปแบบตรงตามข้อกำหนด',
    'required' => 'กรุณาระบุ :attribute',
    'required_if' => 'จำเป็นต้องระบุค่า :attribute เมื่อ :other เป็น :value',
    'required_unless' => 'จำเป็นต้องระบุค่า :attribute เว้นแต่ :other อยู่ใน :values',
    'required_with' => 'จำเป็นต้องระบุ :attribute หากมีการระบุค่า :values',
    'required_with_all' => 'จำเป็นต้องระบุ :attribute หากมีการระบุค่าเหล่านี้ :values',
    'required_without' => 'จำเป็นต้องระบุ :attribute หากไม่ได้ระบุค่า :values',
    'required_without_all' => 'จำเป็นต้องระบุ :attribute หากไม่มีการระบุค่าเหล่านี้ :values',
    'prohibited' => 'ต้องไม่ระบุ :attribute',
    'prohibited_if' => 'ต้องไม่ระบุ :attribute เมื่อ :other เป็น :value',
    'prohibited_unless' => 'ต้องไม่ระบุ :attribute เว้นแต่ :other อยู่ใน :values',
    'prohibits' => 'เมื่อ :attribute จะต้องไม่ระบุ :other',
    'same' => ':attribute และ :other ต้องมีค่าตรงกัน',
    'size' => [
        'numeric' => ':attribute ต้องมีค่าเท่ากับ :size.',
        'file' => ':attribute ต้องมีขนาดเท่ากับ :size กิโลไบต์',
        'string' => ':attribute ต้องมีความยาวเท่ากับ :size ตัวอักษร',
        'array' => ':attribute ต้องมีจำนวนเท่ากับ :size',
    ],
    'starts_with' => ':attribute ต้องเริ่มด้วยคำใดคำหนึ่งต่อไปนี้: :values',
    'string' => ':attribute ต้องเป็นตัวอักขระ',
    'timezone' => ':attribute ต้องเป็นเขตเวลาที่ถูกต้อง',
    'unique' => ':attribute นี้มีอยู่ในระบบแล้ว',
    'uploaded' => 'ไฟล์ :attribute ไม่สามารถมพโหลดได้',
    'url' => 'รูปแบบ :attribute ไม่ถูกต้อง',
    'uuid' => ':attribute ต้องเป็นค่า UUID ที่ถูกต้อง',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
