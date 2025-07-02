<?php

declare(strict_types=1);

return [
    'cluster' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-photo',
    ],
    'photo' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-photo',
        'datetime_format' => 'Y-m-d H:i:s',
        'navigation_badge' => false,
        'model' => \RectitudeOpen\FilamentPhotos\Models\Photo::class,
        'filament_resource' => \RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource::class,
    ],
    'photo_category' => [
        'model' => \RectitudeOpen\FilamentPhotos\Models\PhotoCategory::class,
        'page' => \RectitudeOpen\FilamentPhotos\Filament\Pages\PhotoCategory::class,
        'navigation_sort' => 2,
        'navigation_icon' => 'heroicon-o-rectangle-stack',
    ],
];
