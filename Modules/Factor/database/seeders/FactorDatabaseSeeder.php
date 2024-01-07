<?php

namespace Modules\Factor\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Factor;

class FactorDatabaseSeeder extends Seeder
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
         * Factors Seed
         * ------------------
         */

        // DB::table('factors')->truncate();
        // echo "Truncate: factors \n";

        Factor::factory()->count(20)->create();
        $rows = Factor::all();
        echo " Insert: factors \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
