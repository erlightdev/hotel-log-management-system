<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PintCommand extends Command
{
    protected $signature = 'pint';

    protected $description = 'Run Laravel Pint code formatter';

    public function handle()
    {
        // Use full path to vendor/bin/pint
        $pintPath = base_path('vendor/bin/pint');

        $output = [];
        $exitCode = 0;
        exec("php {$pintPath}", $output, $exitCode);

        if ($exitCode === 0) {
            $this->info('Pint ran successfully and formatted your code!');

            return 0;
        } else {
            $this->error('There was an error running Pint.');

            return 1;
        }
    }
}
