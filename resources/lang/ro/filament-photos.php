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
        'resource' => [
            'label' => 'Fotografii',
        ],
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
            'url' => 'URL',
            'display_order' => 'Ordinea de afișare',
            'created_at' => 'Creat la',
            'status' => 'Status',
            'status_published' => 'Publicat',
            'status_draft' => 'Ciornă',
        ],
        'info' => [
            'select_categories' => 'Selectați categoriile',
            'duplicate_selected' => 'Duplică selecția',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Categorii de fotografii',
        ],
        'nav' => [
            'label' => 'Categorii de fotografii',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titlu',
        ],
    ],
];
