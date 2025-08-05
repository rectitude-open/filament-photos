<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotografie',
            'group' => 'Obsah',
        ],
    ],
    'photo' => [
        'resource' => [
            'label' => 'Fotografie',
        ],
        'nav' => [
            'label' => 'Fotografie',
            'group' => '',
        ],
        'field' => [
            'title' => 'Název',
            'description' => 'Popis',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Kategorie',
            'pictures' => 'Obrázky',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Pořadí zobrazení',
            'created_at' => 'Vytvořeno',
            'status' => 'Stav',
            'status_published' => 'Publikováno',
            'status_draft' => 'Koncept',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategorie',
            'duplicate_selected' => 'Duplikovat vybrané',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Kategorie fotografií',
        ],
        'nav' => [
            'label' => 'Kategorie fotografií',
            'group' => '',
        ],
        'field' => [
            'title' => 'Název',
        ],
    ],
];
