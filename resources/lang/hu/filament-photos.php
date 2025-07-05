<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotók',
            'group' => 'Tartalom',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotók',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
            'description' => 'Leírás',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategóriák',
            'pictures' => 'Képek',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Megjelenítési sorrend',
            'created_at' => 'Létrehozva',
            'status' => 'Állapot',
            'status_published' => 'Közzétéve',
            'status_draft' => 'Piszkozat',
        ],
        'info' => [
            'select_categories' => 'Kategóriák kiválasztása',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Fotó kategóriák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
];
