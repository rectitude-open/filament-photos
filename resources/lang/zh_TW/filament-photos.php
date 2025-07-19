<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '照片',
            'group' => '內容',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => '照片',
            'group' => '',
        ],
        'field' => [
            'title' => '標題',
            'description' => '描述',
            'taxonomy' => '分類法',
            'categories' => '分類',
            'pictures' => '圖片',
            'seo' => 'SEO',
            'meta' => '中繼資料',
            'slug' => '網址別名',
            'url' => 'URL',
            'display_order' => '顯示順序',
            'created_at' => '建立時間',
            'status' => '狀態',
            'status_published' => '已發佈',
            'status_draft' => '草稿',
        ],
        'info' => [
            'select_categories' => '選擇分類',
            'duplicate_selected' => '複製已選項',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => '照片分類',
            'group' => '',
        ],
        'field' => [
            'title' => '標題',
        ],
    ],
];
