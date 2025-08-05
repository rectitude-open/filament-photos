<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Filament\Clusters;

use Filament\Clusters\Cluster;
use Illuminate\Contracts\Support\Htmlable;

class PhotoCluster extends Cluster
{
    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-photos.cluster.navigation_icon', 'heroicon-o-photo');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-photos.cluster.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-photos::filament-photos.cluster.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-photos::filament-photos.cluster.nav.group');
    }

    public static function getClusterBreadcrumb(): string
    {
        return __('filament-photos::filament-photos.cluster.nav.label');
    }
}
