<?php

namespace Modules\Payment\Console\Commands;

use Illuminate\Console\Command;

class PaymentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:PaymentCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Payment Command description';

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
