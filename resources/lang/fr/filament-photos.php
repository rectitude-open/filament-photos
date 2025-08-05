<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Photos',
            'group' => 'Contenu',
        ],
    ],
    'photo' => [
        'resource' => [
            'label' => 'Photos',
        ],
        'nav' => [
            'label' => 'Photos',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titre',
            'description' => 'Description',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Catégories',
            'pictures' => 'Images',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Ordre d\'affichage',
            'created_at' => 'Créé le',
            'status' => 'Statut',
            'status_published' => 'Publié',
            'status_draft' => 'Brouillon',
        ],
        'info' => [
            'select_categories' => 'Sélectionner les catégories',
            'duplicate_selected' => 'Dupliquer la sélection',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Catégories de photos',
        ],
        'nav' => [
            'label' => 'Catégories de photos',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titre',
        ],
    ],
];
