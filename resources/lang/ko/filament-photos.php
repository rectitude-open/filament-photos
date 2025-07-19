<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '사진',
            'group' => '콘텐츠',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => '사진',
            'group' => '',
        ],
        'field' => [
            'title' => '제목',
            'description' => '설명',
            'taxonomy' => '분류',
            'categories' => '카테고리',
            'pictures' => '이미지',
            'seo' => 'SEO',
            'meta' => '메타',
            'slug' => '슬러그',
            'url' => 'URL',
            'display_order' => '표시 순서',
            'created_at' => '생성일',
            'status' => '상태',
            'status_published' => '게시됨',
            'status_draft' => '초안',
        ],
        'info' => [
            'select_categories' => '카테고리 선택',
            'duplicate_selected' => '선택한 항목 복제',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => '사진 카테고리',
            'group' => '',
        ],
        'field' => [
            'title' => '제목',
        ],
    ],
];
