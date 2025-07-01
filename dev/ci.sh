#!/bin/bash
set -e

/home/wwwroot/filament-photos/vendor/bin/pest
/home/wwwroot/filament-photos/vendor/bin/pint
/home/wwwroot/filament-photos/vendor/bin/phpstan analyse
