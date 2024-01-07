<?php

namespace Modules\Verify\Console\Commands;

use Illuminate\Console\Command;

class VerifyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:VerifyCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify Command description';

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
