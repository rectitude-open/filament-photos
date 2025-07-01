<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource;

class EditPhoto extends EditRecord
{
    protected static string $resource = PhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
