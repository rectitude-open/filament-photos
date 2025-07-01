#!/bin/sh
set -e
cd /home/wwwroot/filament-photos || exit
chown -R www-data:www-data /home/wwwroot/filament-photos && \
find /home/wwwroot/filament-photos -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-photos -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-photos/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-photos/dev/
