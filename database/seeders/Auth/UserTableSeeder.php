<?php

namespace Database\Seeders\Auth;

use App\Events\Backend\UserCreated;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $faker = \Faker\Factory::create();

        // Add the master administrator, user id of 1
        $users = [
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'password' => Hash::make('secret@xdxd.ir'),
                'mobile' => $faker->phoneNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Admin',
                'last_name' => 'Istrator',
                'password' => Hash::make('secret@xdxd.ir'),
                'mobile' => $faker->phoneNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Manager',
                'last_name' => 'User User',
                'password' => Hash::make('secret@xdxd.ir'),
                'mobile' => $faker->phoneNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Executive',
                'last_name' => 'User',
                'password' => Hash::make('secret@xdxd.ir'),
                'mobile' => $faker->phoneNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'General',
                'last_name' => 'User',
                'password' => Hash::make('secret@xdxd.ir'),
                'mobile' => $faker->phoneNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Customer',
                'last_name' => 'User',
                'password' => Hash::make('customer@xdxd.ir'),
                'mobile' => '1111111111',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Service',
                'last_name' => 'Provider',
                'password' => Hash::make('provider@xdxd.ir'),
                'mobile' => '2222222222',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'hamid',
                'last_name' => 'tahamtan',
                'password' => Hash::make('operator@xdxd.ir'),
                'mobile' => '09932881519',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'mohammad',
                'last_name' => 'tahamtan',
                'password' => Hash::make('accountant@xdxd.ir'),
                'mobile' => '09032211903',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($users as $user_data) {
            $user = User::create($user_data);

            event(new UserCreated($user));
        }

        Schema::enableForeignKeyConstraints();
    }
}
