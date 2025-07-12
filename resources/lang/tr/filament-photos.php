<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotoğraflar',
            'group' => 'İçerik',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotoğraflar',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
            'description' => 'Açıklama',
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategoriler',
            'pictures' => 'Resimler',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Görüntüleme sırası',
            'created_at' => 'Oluşturulma tarihi',
            'status' => 'Durum',
            'status_published' => 'Yayınlandı',
            'status_draft' => 'Taslak',
        ],
        'info' => [
            'select_categories' => 'Kategorileri seçin',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Fotoğraf kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
];
