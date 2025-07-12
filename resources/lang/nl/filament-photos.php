<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Foto\'s',
            'group' => 'Inhoud',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Foto\'s',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
            'description' => 'Beschrijving',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Categorieën',
            'pictures' => 'Afbeeldingen',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Weergavevolgorde',
            'created_at' => 'Aangemaakt op',
            'status' => 'Status',
            'status_published' => 'Gepubliceerd',
            'status_draft' => 'Concept',
        ],
        'info' => [
            'select_categories' => 'Selecteer categorieën',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Foto categorieën',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
];
