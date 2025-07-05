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
            'title' => 'Názov',
            'description' => 'Popis',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategórie',
            'pictures' => 'Obrázky',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Poradie zobrazenia',
            'created_at' => 'Vytvorené',
            'status' => 'Stav',
            'status_published' => 'Publikované',
            'status_draft' => 'Návrh',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategórie',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Kategórie fotiek',
            'group' => '',
        ],
        'field' => [
            'title' => 'Názov',
        ],
    ],
];
