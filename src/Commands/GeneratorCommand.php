<?php

namespace LaravelGenerator\Generator\Commands;

use Illuminate\Console\Command;

class GeneratorCommand extends Command
{
    public $signature = 'laravel-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
