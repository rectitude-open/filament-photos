<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;
use RectitudeOpen\FilamentPhotos\Filament\Clusters\PhotoCluster;
use RectitudeOpen\FilamentPhotos\Models\PhotoCategory as TreePageModel;
use SolutionForest\FilamentTree\Pages\TreePage as BasePage;

class PhotoCategory extends BasePage
{
    protected static ?string $cluster = PhotoCluster::class;

    protected static int $maxDepth = 3;

    public static function getNavigationSort(): ?int
    {
        return config('filament-photos.photo_category.navigation_sort', 2);
    }

    public static function getNavigationIcon(): ?string
    {
        return config('filament-photos.photo_category.navigation_icon', 'heroicon-o-rectangle-stack');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-photos::filament-photos.photo_category.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-photos::filament-photos.photo_category.nav.group');
    }

    public function getModel(): string
    {
        return static::$model ?? config('filament-photos.photo_category.model', TreePageModel::class);
    }

    protected function getActions(): array
    {
        return [
            $this->getCreateAction()->icon('heroicon-o-plus'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label(__('filament-photos::filament-photos.photo_category.field.title'))
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }

    /**
     * @param  TreePageModel|null  $record
     */
    public function getTreeRecordTitle(?Model $record = null): string
    {
        if (! $record) {
            return '';
        }

        $id = $record->id ? " [ID: {$record->id}] " : '';
        $title = $record->title ?? '';

        return "$id $title";
    }

    protected function hasDeleteAction(): bool
    {
        return true;
    }

    protected function hasEditAction(): bool
    {
        return true;
    }

    protected function hasViewAction(): bool
    {
        return false;
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }
}
