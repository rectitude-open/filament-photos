<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'الصور',
            'group' => 'المحتوى',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'الصور',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
            'description' => 'الوصف',
            'taxonomy' => 'التصنيف',
            'categories' => 'الفئات',
            'pictures' => 'الصور',
            'seo' => 'تحسين محركات البحث',
            'meta' => 'ميتا',
            'slug' => 'الرابط',
            'display_order' => 'ترتيب العرض',
            'created_at' => 'تاريخ الإنشاء',
            'status' => 'الحالة',
            'status_published' => 'منشور',
            'status_draft' => 'مسودة',
        ],
        'info' => [
            'select_categories' => 'اختر الفئات',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'فئات الصور',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
        ],
    ],
];
