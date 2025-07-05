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
            'display_order' => 'Ordem de exibição',
            'created_at' => 'Criado em',
            'status' => 'Estado',
            'status_published' => 'Publicado',
            'status_draft' => 'Rascunho',
        ],
        'info' => [
            'select_categories' => 'Selecionar categorias',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Categorias de fotografias',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
