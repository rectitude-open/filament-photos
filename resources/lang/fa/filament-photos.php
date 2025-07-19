<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'عکس‌ها',
            'group' => 'محتوا',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'عکس‌ها',
            'group' => '',
        ],
        'field' => [
            'title' => 'عنوان',
            'description' => 'توضیحات',
            'taxonomy' => 'طبقه‌بندی',
            'categories' => 'دسته‌بندی‌ها',
            'pictures' => 'تصاویر',
            'seo' => 'سئو',
            'meta' => 'متا',
            'slug' => 'نامک',
            'url' => 'آدرس',
            'display_order' => 'ترتیب نمایش',
            'created_at' => 'تاریخ ایجاد',
            'status' => 'وضعیت',
            'status_published' => 'منتشر شده',
            'status_draft' => 'پیش‌نویس',
        ],
        'info' => [
            'select_categories' => 'انتخاب دسته‌بندی‌ها',
            'duplicate_selected' => 'تکرار موارد انتخاب‌شده',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'دسته‌بندی عکس‌ها',
            'group' => '',
        ],
        'field' => [
            'title' => 'عنوان',
        ],
    ],
];
