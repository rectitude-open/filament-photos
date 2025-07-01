<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource;

class CreatePhoto extends CreateRecord
{
    protected static string $resource = PhotoResource::class;
}
