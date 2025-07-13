<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
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

    /**
     * @return LengthAwarePaginator<Photo>
     */
    public function getLatestPublishedPhotoPaginated(int $perPage = 10): LengthAwarePaginator
    {
        // @phpstan-ignore-next-line
        return $this->getModel()::with(['categories'])->ordered()->published()->paginate($perPage);
    }

    /**
     * @return Collection<int, Photo>
     */
    public function getPublishedPhotosByCategory(int $categoryId): Collection
    {
        $carousels = $this->getModel()::published()->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('id', $categoryId);
        })->get();

        /** @var Collection<int, Photo> $carousels */
        return $carousels;
    }
}
