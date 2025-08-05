<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '写真',
            'group' => 'コンテンツ',
        ],
    ],
    'photo' => [
        'resource' => [
            'label' => '写真',
        ],
        'nav' => [
            'label' => '写真',
            'group' => '',
        ],
        'field' => [
            'title' => 'タイトル',
            'description' => '説明',
            'taxonomy' => '分類',
            'categories' => 'カテゴリ',
            'pictures' => '画像',
            'seo' => 'SEO',
            'meta' => 'メタ',
            'slug' => 'スラッグ',
            'url' => 'URL',
            'display_order' => '表示順序',
            'created_at' => '作成日時',
            'status' => 'ステータス',
            'status_published' => '公開済み',
            'status_draft' => '下書き',
        ],
        'info' => [
            'select_categories' => 'カテゴリを選択',
            'duplicate_selected' => '選択したものを複製',
        ],
    ],
    'photo_category' => [
        'resource' => [
            'label' => '写真カテゴリ',
        ],
        'nav' => [
            'label' => '写真カテゴリ',
            'group' => '',
        ],
        'field' => [
            'title' => 'タイトル',
        ],
    ],
];
