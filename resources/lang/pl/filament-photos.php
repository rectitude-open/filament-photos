<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Zdjęcia',
            'group' => 'Treść',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Zdjęcia',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tytuł',
            'description' => 'Opis',
            'taxonomy' => 'Taksonomia',
            'categories' => 'Kategorie',
            'pictures' => 'Obrazy',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Kolejność wyświetlania',
            'created_at' => 'Utworzono',
            'status' => 'Status',
            'status_published' => 'Opublikowane',
            'status_draft' => 'Szkic',
        ],
        'info' => [
            'select_categories' => 'Wybierz kategorie',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Kategorie zdjęć',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tytuł',
        ],
    ],
];
