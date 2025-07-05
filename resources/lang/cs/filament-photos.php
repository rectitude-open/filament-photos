<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotky',
            'group' => 'Obsah',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotky',
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
            'display_order' => 'Pořadí zobrazení',
            'created_at' => 'Vytvořeno',
            'status' => 'Stav',
            'status_published' => 'Publikováno',
            'status_draft' => 'Návrh',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategorie',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Kategorie fotek',
            'group' => '',
        ],
        'field' => [
            'title' => 'Název',
        ],
    ],
];
