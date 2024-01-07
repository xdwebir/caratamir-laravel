<?php

namespace Modules\Service\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Service;

class ServiceDatabaseSeeder extends Seeder
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

        DB::table('services')->insert([
            'name' => 'یدک کش',
        ]);
        DB::table('services')->insert([
            'name' => 'امدادرسان',
        ]);
        DB::table('services')->insert([
            'name' => 'تعمیرگاه',
        ]);
        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
