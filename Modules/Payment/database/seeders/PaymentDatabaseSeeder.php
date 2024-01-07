<?php

namespace Modules\Payment\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Payment;

class PaymentDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Payments Seed
         * ------------------
         */

        // DB::table('payments')->truncate();
        // echo "Truncate: payments \n";

        Payment::factory()->count(20)->create();
        $rows = Payment::all();
        echo " Insert: payments \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
