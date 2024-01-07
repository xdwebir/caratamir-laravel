<?php

namespace Modules\Code\Console\Commands;

use Illuminate\Console\Command;

class CodeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:CodeCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Code Command description';

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
