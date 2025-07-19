# Changelog

## [1.8.0](https://github.com/rectitude-open/filament-photos/compare/v1.7.2...v1.8.0) (2025-07-19)


### Features

* add bulk duplicate action for photos with category selection ([b1629e7](https://github.com/rectitude-open/filament-photos/commit/b1629e74ad4f3b0670f69dc15ea0e215943c7f89))
* add translations for duplicate_selected ([51117c1](https://github.com/rectitude-open/filament-photos/commit/51117c11d178e159bc5d8d1c5ae66a05b27a0379))
* remove soft deletes from PhotoCategory model and migration ([332fe4e](https://github.com/rectitude-open/filament-photos/commit/332fe4ec0597ca1c5fb9049ee47f27af2e465587))

## [1.7.2](https://github.com/rectitude-open/filament-photos/compare/v1.7.1...v1.7.2) (2025-07-18)


### Bug Fixes

* remove unused properties and improve type hinting in Photo model ([6d991b9](https://github.com/rectitude-open/filament-photos/commit/6d991b9afaef8ea21bb8d716eb9eaf662fe94e1b))
* update type hint for getTreeRecordTitle method parameter ([6f22396](https://github.com/rectitude-open/filament-photos/commit/6f223965f29f47fbc54ac93ebca662a1d86d4da6))

## [1.7.1](https://github.com/rectitude-open/filament-photos/compare/v1.7.0...v1.7.1) (2025-07-15)


### Bug Fixes

* update config keys for filament-photos resource and page ([3385c77](https://github.com/rectitude-open/filament-photos/commit/3385c77e289cf02456c08598a7c89d439c674f36))

## [1.7.0](https://github.com/rectitude-open/filament-photos/compare/v1.6.3...v1.7.0) (2025-07-13)


### Features

* add getLatestPhotoPaginatedByCategory method for pagination by category ([6e2c739](https://github.com/rectitude-open/filament-photos/commit/6e2c739d281340c71150ff064f9983577399fd64))
* add getTreeRecordTitle method for improved record title formatting ([986177f](https://github.com/rectitude-open/filament-photos/commit/986177f74f8ee8d2f19589182a8cf8f7f444c19e))

## [1.6.3](https://github.com/rectitude-open/filament-photos/compare/v1.6.2...v1.6.3) (2025-07-13)


### Bug Fixes

* add dehydrateStateUsing to url TextInput for handling null state ([298d5c5](https://github.com/rectitude-open/filament-photos/commit/298d5c57664a6900e6ea8b37fb47059e2f65c58e))

## [1.6.2](https://github.com/rectitude-open/filament-photos/compare/v1.6.1...v1.6.2) (2025-07-13)


### Bug Fixes

* rename function from photosByCategory to categoryPhotos for clarity ([e655cf0](https://github.com/rectitude-open/filament-photos/commit/e655cf0da77fecc428d63334bd84aa3157bb481d))
* update variable names for consistency in getPublishedPhotosByCategory method ([b63b0c5](https://github.com/rectitude-open/filament-photos/commit/b63b0c587c08738dfbaf63e60ccf6877e55ccf46))

## [1.6.1](https://github.com/rectitude-open/filament-photos/compare/v1.6.0...v1.6.1) (2025-07-13)


### Bug Fixes

* add autoload files section to include helpers.php ([50321c8](https://github.com/rectitude-open/filament-photos/commit/50321c8c75e66125259a46c632827ac821e2cd28))

## [1.6.0](https://github.com/rectitude-open/filament-photos/compare/v1.5.0...v1.6.0) (2025-07-13)


### Features

* add firstPicture method to retrieve the first associated picture ([4038076](https://github.com/rectitude-open/filament-photos/commit/4038076a88399fb4062c25939ede5a67149b2229))
* implement categoryPhotos helper function to retrieve photos by category ([3049740](https://github.com/rectitude-open/filament-photos/commit/30497402ae99ceb5728eceda5448350e7015498b))

## [1.5.0](https://github.com/rectitude-open/filament-photos/compare/v1.4.0...v1.5.0) (2025-07-12)


### Features

* add url field and improve translations ([0118ff9](https://github.com/rectitude-open/filament-photos/commit/0118ff9f41f23996ee735a085cabbc45b933d83a))

## [1.4.0](https://github.com/rectitude-open/filament-photos/compare/v1.3.0...v1.4.0) (2025-07-09)


### Features

* add getLatestPublishedPhotoPaginated method ([e3989d2](https://github.com/rectitude-open/filament-photos/commit/e3989d215a59a450a5fcc5db0f29c306d6f37270))
* update README and composer.json for improved package description and keywords ([d7bc91d](https://github.com/rectitude-open/filament-photos/commit/d7bc91dda1010d54c4041e2adadc28eb3a055592))

## [1.3.0](https://github.com/rectitude-open/filament-photos/compare/v1.2.1...v1.3.0) (2025-07-06)


### Features

* add more translations ([ea577ab](https://github.com/rectitude-open/filament-photos/commit/ea577abfaecfce3d53cee66791d468df47f205be))

## [1.2.1](https://github.com/rectitude-open/filament-photos/compare/v1.2.0...v1.2.1) (2025-07-04)


### Bug Fixes

* update description field label in PhotoResource ([afa1e0e](https://github.com/rectitude-open/filament-photos/commit/afa1e0e0105e5b1c7ff791ea0d4c7f8de3c42de5))

## [1.2.0](https://github.com/rectitude-open/filament-photos/compare/v1.1.0...v1.2.0) (2025-07-04)


### Features

* add description field ([af5d498](https://github.com/rectitude-open/filament-photos/commit/af5d4980953b682992a5390a79cd2747bb9a3078))

## [1.1.0](https://github.com/rectitude-open/filament-photos/compare/v1.0.0...v1.1.0) (2025-07-02)


### Features

* implement registration of resources and pages in FilamentPhotosPlugin ([ace9e5c](https://github.com/rectitude-open/filament-photos/commit/ace9e5c691b6f541c44a874ac25d74117bff7fa8))


### Bug Fixes

* update labels for consistency in navigation and categories ([70b9057](https://github.com/rectitude-open/filament-photos/commit/70b9057c07647a66273daa9863218a13c492de35))
* update navigation icons to use 'heroicon-o-photo' ([7457c12](https://github.com/rectitude-open/filament-photos/commit/7457c1235b06f23d28ff9859198c77214254b4e0))
* update slug source from 'name' to 'title' in Photo model ([957d2b7](https://github.com/rectitude-open/filament-photos/commit/957d2b79e2c14315a06192ad1ca74c4998735de9))

## 1.0.0 (2025-07-01)


### Features

* add core feature ([fed7586](https://github.com/rectitude-open/filament-photos/commit/fed75862e85a832664e0f09f77ddad751149f06e))
* init package name ([ca6e0e5](https://github.com/rectitude-open/filament-photos/commit/ca6e0e5d91fe4211a4601ff3567a4cb3b154766b))
