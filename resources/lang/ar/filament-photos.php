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
        'resource' => [
            'label' => 'الصور',
        ],
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
            'meta' => 'البيانات الوصفية',
            'slug' => 'الرابط المختصر',
            'url' => 'الرابط',
            'display_order' => 'ترتيب العرض',
            'created_at' => 'تاريخ الإنشاء',
            'status' => 'الحالة',
            'status_published' => 'منشور',
            'status_draft' => 'مسودة',
        ],
        'info' => [
            'select_categories' => 'اختر الفئات',
            'duplicate_selected' => 'تكرار المحدد',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'فئات الصور',
        ],
        'nav' => [
            'label' => 'فئات الصور',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
        ],
    ],
];
