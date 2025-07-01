<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Commands;

use Illuminate\Console\Command;

class FilamentPhotosCommand extends Command
{
    public $signature = 'filament-photos';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
