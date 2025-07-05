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
            'meta' => 'Méta',
            'slug' => 'Slug',
            'display_order' => 'Ordre d’affichage',
            'created_at' => 'Créé le',
            'status' => 'Statut',
            'status_published' => 'Publié',
            'status_draft' => 'Brouillon',
        ],
        'info' => [
            'select_categories' => 'Sélectionner les catégories',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Catégories de photos',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titre',
        ],
    ],
];
