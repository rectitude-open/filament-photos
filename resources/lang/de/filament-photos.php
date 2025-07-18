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
            'url' => 'URL',
            'display_order' => 'Anzeigereihenfolge',
            'created_at' => 'Erstellt am',
            'status' => 'Status',
            'status_published' => 'Veröffentlicht',
            'status_draft' => 'Entwurf',
        ],
        'info' => [
            'select_categories' => 'Kategorien auswählen',
            'duplicate_selected' => 'Ausgewählte duplizieren',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Foto-Kategorien',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
];
