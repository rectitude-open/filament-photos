<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Collection;
use RectitudeOpen\FilamentPhotos\FilamentPhotos;
use RectitudeOpen\FilamentPhotos\Models\Photo;

if (! function_exists('categoryPhotos')) {
    /**
     * @return Collection<int, Photo>
     */
    function categoryPhotos(int | string $categoryIdentifier): Collection
    {
        $service = app(FilamentPhotos::class);

        if (is_numeric($categoryIdentifier)) {
            return $service->getPublishedPhotosByCategory((int) $categoryIdentifier);
        }

        return new Collection;
    }
}
