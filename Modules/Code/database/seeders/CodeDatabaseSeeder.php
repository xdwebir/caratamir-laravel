<?php

namespace Modules\Code\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Code;

class CodeDatabaseSeeder extends Seeder
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
         * Codes Seed
         * ------------------
         */

        // DB::table('codes')->truncate();
        // echo "Truncate: codes \n";

        Code::factory()->count(20)->create();
        $rows = Code::all();
        echo " Insert: codes \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
