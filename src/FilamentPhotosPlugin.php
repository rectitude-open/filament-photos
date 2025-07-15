<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentPhotos\Filament\Pages\PhotoCategory;
use RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource;

class FilamentPhotosPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-photos';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                config('filament-photos.photo.filament_resource', PhotoResource::class),
            ])
            ->pages([
                config('filament-photos.photo_category.page', PhotoCategory::class),
            ])
            ->discoverClusters(
                __DIR__ . '/Filament/Clusters',
                'RectitudeOpen\\FilamentPhotos\\Filament\\Clusters'
            );
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
