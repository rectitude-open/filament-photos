<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Filament\Resources;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;
use RectitudeOpen\FilamentPhotos\Filament\Clusters\PhotoCluster;
use RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource\Pages;
use RectitudeOpen\FilamentPhotos\Models\Photo;

class PhotoResource extends Resource
{
    protected static ?string $cluster = PhotoCluster::class;

    public static function getModel(): string
    {
        return static::$model ?? config('filament-photos.photo_model', Photo::class);
    }

    public static function getNavigationIcon(): ?string
    {
        return static::$navigationIcon ?? config('filament-photos.photo.navigation_icon', 'heroicon-o-photo');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-photos.photo.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-photos::filament-photos.photo.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-photos::filament-photos.photo.nav.group');
    }

    public static function getNavigationBadge(): ?string
    {
        return config('filament-photos.photo.navigation_badge', false)
                ? (string) static::getModel()::count()
                : '';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(['sm' => 3])->schema([
                    Grid::make()->schema([
                        TextInput::make('title')
                            ->label(__('filament-photos::filament-photos.photo.field.title'))
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),
                        CuratorPicker::make('pictures')
                            ->label(__('filament-photos::filament-photos.photo.field.pictures'))
                            ->multiple()
                            ->relationship('pictures', 'id')
                            ->directory('photos')
                            ->columnSpanFull()
                            ->listDisplay(true),
                    ])->columnSpan(['xl' => 2]),
                    Grid::make()->schema([
                        Section::make(__('filament-photos::filament-photos.photo.field.taxonomy'))
                            ->compact()
                            ->schema([
                                SelectTree::make('categories')
                                    ->label(__('filament-photos::filament-photos.photo.field.categories'))
                                    ->placeholder(__('filament-photos::filament-photos.photo.info.select_categories'))
                                    ->parentNullValue(-1)
                                    ->relationship('categories', 'title', 'parent_id')
                                    ->searchable()
                                    ->defaultOpenLevel(3)
                                    ->columnSpanFull()
                                    ->required(),
                            ]),
                        Section::make(__('filament-photos::filament-photos.photo.field.meta'))
                            ->compact()
                            ->schema([
                                TextInput::make('slug')
                                    ->label(__('filament-photos::filament-photos.photo.field.slug'))
                                    ->maxLength(255)
                                    ->inlineLabel()
                                    ->columnSpanFull(),
                                TextInput::make('display_order')
                                    ->label(__('filament-photos::filament-photos.photo.field.display_order'))
                                    ->default(0)
                                    ->numeric()
                                    ->step(1)
                                    ->inlineLabel()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                ToggleButtons::make('is_published')
                                    ->label(__('filament-photos::filament-photos.photo.field.status'))
                                    ->options([
                                        1 => __('filament-photos::filament-photos.photo.field.status_published'),
                                        0 => __('filament-photos::filament-photos.photo.field.status_draft'),
                                    ])
                                    ->default(1)
                                    ->colors([
                                        1 => 'success',
                                        0 => 'warning',
                                    ])
                                    ->icons([
                                        1 => 'heroicon-o-check-circle',
                                        0 => 'heroicon-o-x-circle',
                                    ])
                                    ->inline()
                                    ->inlineLabel(),
                                DateTimePicker::make('created_at')
                                    ->label(__('filament-photos::filament-photos.photo.field.created_at'))
                                    ->native(false)
                                    ->default(now())
                                    ->suffixIcon('heroicon-o-calendar')
                                    ->columnSpanFull()
                                    ->inlineLabel()
                                    ->format(config('filament-photos.photo.datetime_format', 'Y-m-d H:i:s'))
                                    ->displayFormat(config('filament-photos.photo.datetime_format', 'Y-m-d H:i:s')),
                            ])
                            ->collapsible(),
                        Section::make(__('filament-photos::filament-photos.photo.field.seo'))
                            ->compact()
                            ->schema([
                                SEO::make(),
                            ])
                            ->collapsible(),
                    ])->columnSpan(['xl' => 1]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('filament-photos::filament-photos.photo.field.title'))
                    ->searchable()
                    ->limit(50),
                CuratorColumn::make('pictures')
                    ->label('')
                    ->size(30),
                TextColumn::make('categories.title')
                    ->label(__('filament-photos::filament-photos.photo.field.categories'))
                    ->searchable()
                    ->limit(50)
                    ->formatStateUsing(fn ($state) => implode('<br/>', explode(', ', $state)))
                    ->html(),
                IconColumn::make('is_published')
                    ->label(__('filament-photos::filament-photos.photo.field.status'))
                    ->icon(fn ($state): string => match ($state) {
                        1 => 'heroicon-o-check-circle',
                        0 => 'heroicon-o-x-circle',
                        default => 'heroicon-o-question-mark-circle',
                    })
                    ->color(fn ($state): string => match ($state) {
                        1 => 'success',
                        0 => 'danger',
                        default => 'warning',
                    }),
                TextColumn::make('created_at')
                    ->label(__('filament-photos::filament-photos.photo.field.created_at'))
                    ->sortable(),
            ])->filters([
                Tables\Filters\TrashedFilter::make(),
                SelectFilter::make('is_published')
                    ->label(__('filament-photos::filament-photos.photo.field.status'))
                    ->options([
                        1 => __('filament-photos::filament-photos.photo.field.status_published'),
                        0 => __('filament-photos::filament-photos.photo.field.status_draft'),
                    ]),
                SelectFilter::make('categories')
                    ->label(__('filament-photos::filament-photos.photo.field.categories'))
                    ->relationship('categories', 'title')
                    ->searchable(),
            ])->headerActions([
                //
            ])->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPhoto::route('/'),
            'create' => Pages\CreatePhoto::route('/create'),
            'edit' => Pages\EditPhoto::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
