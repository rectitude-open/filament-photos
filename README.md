![Filament Photos Banner](./art/Filament%20Photos.png)
# Filament Photos

![Do not use](https://img.shields.io/badge/Under%20development-Don't%20use-red)
[![Tests](https://github.com/rectitude-open/filament-photos/actions/workflows/run-tests.yml/badge.svg)](https://github.com/rectitude-open/filament-photos/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%205-brightgreen)](https://phpstan.org/)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rectitude-open/filament-photos.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-photos)
[![Total Downloads](https://img.shields.io/packagist/dt/rectitude-open/filament-photos.svg?style=flat-square)](https://packagist.org/packages/rectitude-open/filament-photos)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](https://github.com/rectitude-open/filament-photos/pulls)

Filament Photos is a Filament plugin that adds a dedicated photo management section to your Filament admin panel. Unlike basic media management, this plugin is designed for organizing and showcasing curated photo collections such as company equipment displays, team activities, project galleries, or any categorized photo content that requires structured presentation.

The plugin provides a complete photo management system with categories, SEO optimization, and an intuitive admin interface, making it perfect for businesses and organizations that need to manage and display their visual content professionally.

This package is also a standalone part of a CMS project: [FilaPress](https://github.com/rectitude-open/filapress).

> **Note:** This plugin relies on several excellent Laravel/Filament plugins. Before installing Filament Photos, you must ensure that all the following dependencies are installed and properly configured in your project.
[Eloquent Sluggable](https://github.com/cviebrock/eloquent-sluggable), [Filament SEO](https://github.com/ralphjsmit/laravel-filament-seo), [Filament Curator](https://github.com/awcodes/filament-curator), [Filament Tree](https://github.com/solutionforest/filament-tree)

Resource | Page | Cluster | Migration | Model | Config | View | Localization
--- | --- | --- | --- | --- | --- | --- | ---
✅ | ✅| ✅ | ✅ | ✅ | ✅ | ❌ | ✅  

## Installation

You can install the package via composer:

```bash
composer require rectitude-open/filament-photos
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-photos-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-photos-config"
```

Optionally, you can publish the translations using

```bash
php artisan vendor:publish --tag="filament-photos-translations"
```

This is the contents of the published config file:

```php
return [
    'cluster' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-photo',
    ],
    'photo' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-photo',
        'datetime_format' => 'Y-m-d H:i:s',
        'navigation_badge' => false,
        'model' => \RectitudeOpen\FilamentPhotos\Models\Photo::class,
        'filament_resource' => \RectitudeOpen\FilamentPhotos\Filament\Resources\PhotoResource::class,
    ],
    'photo_category' => [
        'model' => \RectitudeOpen\FilamentPhotos\Models\PhotoCategory::class,
        'page' => \RectitudeOpen\FilamentPhotos\Filament\Pages\PhotoCategory::class,
        'navigation_sort' => 2,
        'navigation_icon' => 'heroicon-o-rectangle-stack',
    ],
    'editor_component_class' => \Filament\Forms\Components\RichEditor::class,
];
```

## Usage

The package provides a resource page that allows you to view photos in your Filament admin panel. 

To use the resource page provided by this package, you need to register it in your Panel Provider first.

```php
namespace App\Providers\Filament;

use RectitudeOpen\FilamentPhotos\FilamentPhotosPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->plugins([
                FilamentPhotosPlugin::make()
            ]);
    }
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Aspirant Zhang](https://github.com/aspirantzhang)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
