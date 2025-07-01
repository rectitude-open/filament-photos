<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentPhotos\FilamentPhotos
 */
class FilamentPhotos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentPhotos\FilamentPhotos::class;
    }
}
