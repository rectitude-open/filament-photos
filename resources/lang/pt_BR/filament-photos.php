<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotos',
            'group' => 'Conteúdo',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Fotos',
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
            'display_order' => 'Ordem de exibição',
            'created_at' => 'Criado em',
            'status' => 'Status',
            'status_published' => 'Publicado',
            'status_draft' => 'Rascunho',
        ],
        'info' => [
            'select_categories' => 'Selecionar categorias',
            'duplicate_selected' => 'Duplicar selecionados',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Categorias de fotos',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
