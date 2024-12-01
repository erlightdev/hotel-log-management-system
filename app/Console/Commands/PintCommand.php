<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PintCommand extends Command
{
    protected $signature = 'pint';  // Define the name of your custom command
    protected $description = 'Run Laravel Pint code formatter';

    public function handle()
    {
        // Execute Pint directly
        $exitCode = exec('./vendor/bin/pint');
        if ($exitCode === 0) {
            $this->info('Pint ran successfully!');
        } else {
            $this->error('There was an error running Pint.');
        }
    }
}
