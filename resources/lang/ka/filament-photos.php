<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'ფოტოები',
            'group' => 'კონტენტი',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'ფოტოები',
            'group' => '',
        ],
        'field' => [
            'title' => 'სათაური',
            'description' => 'აღწერა',
            'taxonomy' => 'ტაქსონომია',
            'categories' => 'კატეგორიები',
            'pictures' => 'სურათები',
            'seo' => 'SEO',
            'meta' => 'მეტა',
            'slug' => 'სლაგი',
            'url' => 'URL',
            'display_order' => 'ჩვენების რიგი',
            'created_at' => 'შექმნის თარიღი',
            'status' => 'სტატუსი',
            'status_published' => 'გამოქვეყნებული',
            'status_draft' => 'ესკიზი',
        ],
        'info' => [
            'select_categories' => 'აირჩიეთ კატეგორიები',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'ფოტოების კატეგორიები',
            'group' => '',
        ],
        'field' => [
            'title' => 'სათაური',
        ],
    ],
];
