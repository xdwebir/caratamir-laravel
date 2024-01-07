<?php

namespace Modules\Verify\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Verify;

class VerifyDatabaseSeeder extends Seeder
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
         * Verifies Seed
         * ------------------
         */

        // DB::table('verifies')->truncate();
        // echo "Truncate: verifies \n";

        Verify::factory()->count(20)->create();
        $rows = Verify::all();
        echo " Insert: verifies \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
