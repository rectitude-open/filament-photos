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
            'title' => 'Nosaukums',
            'description' => 'Apraksts',
            'taxonomy' => 'Taksonomija',
            'categories' => 'Kategorijas',
            'pictures' => 'Attēli',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Rādīšanas kārtība',
            'created_at' => 'Izveidots',
            'status' => 'Statuss',
            'status_published' => 'Publicēts',
            'status_draft' => 'Melnraksts',
        ],
        'info' => [
            'select_categories' => 'Atlasīt kategorijas',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Fotogrāfiju kategorijas',
            'group' => '',
        ],
        'field' => [
            'title' => 'Nosaukums',
        ],
    ],
];
