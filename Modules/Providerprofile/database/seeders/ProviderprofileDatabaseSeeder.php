<?php

namespace Modules\Providerprofile\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Providerprofile;

class ProviderprofileDatabaseSeeder extends Seeder
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
         * Providerprofiles Seed
         * ------------------
         */

        // DB::table('providerprofiles')->truncate();
        // echo "Truncate: providerprofiles \n";

        Providerprofile::factory()->count(20)->create();
        $rows = Providerprofile::all();
        echo " Insert: providerprofiles \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
