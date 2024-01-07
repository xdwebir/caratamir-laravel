<?php

namespace Modules\Providerprofile\Console\Commands;

use Illuminate\Console\Command;

class ProviderprofileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ProviderprofileCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Providerprofile Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
