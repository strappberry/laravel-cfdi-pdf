<?php

namespace Strappberry\LaravelCfdiPdf\Commands;

use Illuminate\Console\Command;

class LaravelCfdiPdfCommand extends Command
{
    public $signature = 'laravel-cfdi-pdf';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
