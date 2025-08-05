<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotografias',
            'group' => 'Conteúdo',
        ],
    ],
    'photo' => [
        'resource' => [
            'label' => 'Fotografias',
        ],
        'nav' => [
            'label' => 'Fotografias',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
            'description' => 'Descrição',
            'taxonomy' => 'Taxonomia',
            'categories' => 'Categorias',
            'pictures' => 'Imagens',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'url' => 'URL',
            'display_order' => 'Ordem de visualização',
            'created_at' => 'Criado a',
            'status' => 'Estado',
            'status_published' => 'Publicado',
            'status_draft' => 'Rascunho',
        ],
        'info' => [
            'select_categories' => 'Seleccionar categorias',
            'duplicate_selected' => 'Duplicar selecionados',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Categorias de fotografias',
        ],
        'nav' => [
            'label' => 'Categorias de fotografias',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
