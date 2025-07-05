<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotografii',
            'group' => 'Conținut',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotografii',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titlu',
            'description' => 'Descriere',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Categorii',
            'pictures' => 'Imagini',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordine de afișare',
            'created_at' => 'Creat la',
            'status' => 'Stare',
            'status_published' => 'Publicat',
            'status_draft' => 'Schiță',
        ],
        'info' => [
            'select_categories' => 'Selectați categorii',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Categorii de fotografii',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titlu',
        ],
    ],
];
