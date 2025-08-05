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
        'resource' => [
            'label' => 'Foto',
        ],
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
            'duplicate_selected' => 'Duplikat yang dipilih',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Kategori Foto',
        ],
        'nav' => [
            'label' => 'Kategori Foto',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
        ],
    ],
];
