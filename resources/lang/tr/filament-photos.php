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
        'resource' => [
            'label' => 'Fotoğraflar',
        ],
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
            'duplicate_selected' => 'Seçilenleri çoğalt',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Fotoğraf kategorileri',
        ],
        'nav' => [
            'label' => 'Fotoğraf kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
];
