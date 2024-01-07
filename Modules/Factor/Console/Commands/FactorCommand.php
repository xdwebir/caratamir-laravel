<?php

namespace Modules\Factor\Console\Commands;

use Illuminate\Console\Command;

class FactorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:FactorCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Factor Command description';

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
