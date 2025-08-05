<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Foto',
            'group' => 'Contenuto',
        ],
    ],
    'photo' => [
        'resource' => [
            'label' => 'Foto',
        ],
        'nav' => [
            'label' => 'Foto',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titolo',
            'description' => 'Descrizione',
            'taxonomy' => 'Tassonomia',
            'categories' => 'Categorie',
            'pictures' => 'Immagini',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Ordine di visualizzazione',
            'created_at' => 'Creato il',
            'status' => 'Stato',
            'status_published' => 'Pubblicato',
            'status_draft' => 'Bozza',
        ],
        'info' => [
            'select_categories' => 'Seleziona categorie',
            'duplicate_selected' => 'Duplica selezionati',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Categorie foto',
        ],
        'nav' => [
            'label' => 'Categorie foto',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titolo',
        ],
    ],
];
