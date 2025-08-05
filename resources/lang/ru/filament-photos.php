<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Фотографии',
            'group' => 'Контент',
        ],
    ],
    'photo' => [
        'resource' => [
            'label' => 'Фотографии',
        ],
        'nav' => [
            'label' => 'Фотографии',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
            'description' => 'Описание',
            'taxonomy' => 'Таксономия',
            'categories' => 'Категории',
            'pictures' => 'Изображения',
            'seo' => 'SEO',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'url' => 'URL',
            'display_order' => 'Порядок отображения',
            'created_at' => 'Создано',
            'status' => 'Статус',
            'status_published' => 'Опубликовано',
            'status_draft' => 'Черновик',
        ],
        'info' => [
            'select_categories' => 'Выберите категории',
            'duplicate_selected' => 'Дублировать выбранные',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => 'Категории фотографий',
        ],
        'nav' => [
            'label' => 'Категории фотографий',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
];
