<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Photo',
            'group' => 'Content',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Photo',
            'group' => '',
        ],
        'field' => [
            'title' => 'Title',
            'categories' => 'Categories',
            'pictures' => 'Pictures',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Display Order',
            'created_at' => 'Created At',
            'status' => 'Status',
            'status_published' => 'Published',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Select Categories',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'People Categories',
            'group' => '',
        ],
        'field' => [
            'title' => 'Title',
        ],
    ],
];
