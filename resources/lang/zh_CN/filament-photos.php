<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '图片',
            'group' => '内容',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => '图片',
            'group' => '',
        ],
        'field' => [
            'title' => '标题',
            'description' => '描述',
            'taxonomy' => '分类法',
            'categories' => '分类',
            'pictures' => '图片',
            'seo' => 'SEO',
            'meta' => '元数据',
            'slug' => '别名',
            'display_order' => '显示顺序',
            'created_at' => '创建时间',
            'status' => '状态',
            'status_published' => '已发布',
            'status_draft' => '草稿',
        ],
        'info' => [
            'select_categories' => '选择分类',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => '图片分类',
            'group' => '',
        ],
        'field' => [
            'title' => '标题',
        ],
    ],
];
