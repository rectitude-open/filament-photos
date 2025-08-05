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
        'resource' => [
            'label' => 'Фотографії',
        ],
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
            'duplicate_selected' => 'Дублювати вибрані',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Категорії фотографій',
        ],
        'nav' => [
            'label' => 'Категорії фотографій',
            'group' => '',
        ],
        'field' => [
            'title' => 'Назва',
        ],
    ],
];
