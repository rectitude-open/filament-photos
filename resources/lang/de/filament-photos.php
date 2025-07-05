<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotos',
            'group' => 'Inhalt',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotos',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
            'description' => 'Beschreibung',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Kategorien',
            'pictures' => 'Bilder',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Anzeigereihenfolge',
            'created_at' => 'Erstellt am',
            'status' => 'Status',
            'status_published' => 'Veröffentlicht',
            'status_draft' => 'Entwurf',
        ],
        'info' => [
            'select_categories' => 'Kategorien auswählen',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Fotokategorien',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
];
