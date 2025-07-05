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
            'pictures' => 'Görseller',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Görüntüleme Sırası',
            'created_at' => 'Oluşturulma Tarihi',
            'status' => 'Durum',
            'status_published' => 'Yayınlandı',
            'status_draft' => 'Taslak',
        ],
        'info' => [
            'select_categories' => 'Kategorileri Seçin',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Fotoğraf Kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
];
