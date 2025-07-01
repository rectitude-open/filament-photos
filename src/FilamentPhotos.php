<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos;

use RectitudeOpen\FilamentPhotos\Models\Photo;

class FilamentPhotos
{
    /**
     * @return class-string<Photo>
     */
    public function getModel(): string
    {
        return config('filament-photos.photo.model', Photo::class);
    }
}
