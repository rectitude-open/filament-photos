<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotos',
            'group' => 'Contenido',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotos',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
            'description' => 'Descripción',
            'taxonomy' => 'Taxonomía',
            'categories' => 'Categorías',
            'pictures' => 'Imágenes',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Orden de visualización',
            'created_at' => 'Creado el',
            'status' => 'Estado',
            'status_published' => 'Publicado',
            'status_draft' => 'Borrador',
        ],
        'info' => [
            'select_categories' => 'Seleccionar categorías',
            'duplicate_selected' => 'Duplicar seleccionados',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Categorías de fotos',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
