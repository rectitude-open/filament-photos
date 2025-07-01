<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource;

class ListPhoto extends ListRecords
{
    protected static string $resource = PhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
