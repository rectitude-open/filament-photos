<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotogrāfijas',
            'group' => 'Saturs',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotogrāfijas',
            'group' => '',
        ],
        'field' => [
            'title' => 'Virsraksts',
            'description' => 'Apraksts',
            'taxonomy' => 'Taksonomija',
            'categories' => 'Kategorijas',
            'pictures' => 'Attēli',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Attēlošanas secība',
            'created_at' => 'Izveidots',
            'status' => 'Statuss',
            'status_published' => 'Publicēts',
            'status_draft' => 'Melnraksts',
        ],
        'info' => [
            'select_categories' => 'Izvēlieties kategorijas',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Foto kategorijas',
            'group' => '',
        ],
        'field' => [
            'title' => 'Virsraksts',
        ],
    ],
];
