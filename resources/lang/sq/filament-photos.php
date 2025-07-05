<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Foto',
            'group' => 'Përmbajtje',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Foto',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titulli',
            'description' => 'Përshkrimi',
            'taxonomy' => 'Taksonomia',
            'categories' => 'Kategoritë',
            'pictures' => 'Imazhet',
            'seo' => 'SEO',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Renditja e shfaqjes',
            'created_at' => 'Krijuar më',
            'status' => 'Statusi',
            'status_published' => 'Publikuar',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Zgjidhni kategoritë',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Kategoritë e fotove',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titulli',
        ],
    ],
];
