<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Fotografi',
            'group' => 'Përmbajtje',
        ],
    ],
    'photo' => [
        'resource' => [
            'label' => 'Fotografi',
        ],
        'nav' => [
            'label' => 'Fotografi',
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
            'url' => 'URL',
            'display_order' => 'Rendi i shfaqjes',
            'created_at' => 'Krijuar më',
            'status' => 'Statusi',
            'status_published' => 'Publikuar',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Përzgjidhni kategoritë',
            'duplicate_selected' => 'Dupliko të zgjedhurat',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Kategoritë e fotografive',
        ],
        'nav' => [
            'label' => 'Kategoritë e fotografive',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titulli',
        ],
    ],
];
