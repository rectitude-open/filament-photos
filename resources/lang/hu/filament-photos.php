<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fényképek',
            'group' => 'Tartalom',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fényképek',
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
            'url' => 'URL',
            'display_order' => 'Megjelenítési sorrend',
            'created_at' => 'Létrehozva',
            'status' => 'Állapot',
            'status_published' => 'Közzétéve',
            'status_draft' => 'Vázlat',
        ],
        'info' => [
            'select_categories' => 'Kategóriák kiválasztása',
            'duplicate_selected' => 'Kiválasztottak duplikálása',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Fénykép kategóriák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
];
