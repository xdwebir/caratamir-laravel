<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

/**
 * Class UserRoleTableSeeder.
 */
class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::findOrFail(1)->assignRole('super admin');
        User::findOrFail(2)->assignRole('administrator');
        User::findOrFail(3)->assignRole('manager');
        User::findOrFail(4)->assignRole('executive');
        User::findOrFail(5)->assignRole('user');
        User::findOrFail(6)->assignRole('customer');
        User::findOrFail(7)->assignRole('service provider');
        User::findOrFail(8)->assignRole('operator');
        User::findOrFail(9)->assignRole('accountant');

        Schema::enableForeignKeyConstraints();
    }
}
