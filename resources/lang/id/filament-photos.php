<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Foto',
            'group' => 'Konten',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Foto',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
            'description' => 'Deskripsi',
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategori',
            'pictures' => 'Gambar',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Urutan Tampilan',
            'created_at' => 'Dibuat pada',
            'status' => 'Status',
            'status_published' => 'Dipublikasikan',
            'status_draft' => 'Draf',
        ],
        'info' => [
            'select_categories' => 'Pilih Kategori',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Kategori Foto',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
        ],
    ],
];
