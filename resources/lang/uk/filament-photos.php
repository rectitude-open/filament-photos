<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Фотографії',
            'group' => 'Контент',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Фотографії',
            'group' => '',
        ],
        'field' => [
            'title' => 'Назва',
            'description' => 'Опис',
            'taxonomy' => 'Таксономія',
            'categories' => 'Категорії',
            'pictures' => 'Зображення',
            'seo' => 'SEO',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'url' => 'URL',
            'display_order' => 'Порядок відображення',
            'created_at' => 'Створено',
            'status' => 'Статус',
            'status_published' => 'Опубліковано',
            'status_draft' => 'Чернетка',
        ],
        'info' => [
            'select_categories' => 'Оберіть категорії',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Категорії фотографій',
            'group' => '',
        ],
        'field' => [
            'title' => 'Назва',
        ],
    ],
];
