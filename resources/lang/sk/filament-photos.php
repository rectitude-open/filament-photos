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
            'title' => 'Názov',
            'description' => 'Popis',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategórie',
            'pictures' => 'Obrázky',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Poradie zobrazenia',
            'created_at' => 'Vytvorené',
            'status' => 'Stav',
            'status_published' => 'Publikované',
            'status_draft' => 'Koncept',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategórie',
            'duplicate_selected' => 'Duplikovať vybrané',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Kategórie fotografií',
        ],
        'nav' => [
            'label' => 'Kategórie fotografií',
            'group' => '',
        ],
        'field' => [
            'title' => 'Názov',
        ],
    ],
];
