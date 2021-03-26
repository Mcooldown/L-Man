<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Budi',
                'email' => 'budi@gmail.com',
                'reg_number' => '20000192001',
                'phone_number' => '08229100022',
                'role_id' => 2,
                'institution_id' => 1,
                'class_id' => 2,
                'password' => Hash::make('kualat'),
            ],
            [
                'name' => 'John',
                'email' => 'john@gmail.com',
                'reg_number' => '23383392001',
                'phone_number' => '08119193332',
                'role_id' => 3,
                'institution_id' => 1,
                'class_id' => 2,
                'password' => Hash::make('kualat'),
            ],
            [
                'name' => 'James',
                'email' => 'james@gmail.com',
                'reg_number' => '23333194401',
                'phone_number' => '08112551922',
                'role_id' => 3,
                'institution_id' => 1,
                'class_id' => 2,
                'password' => Hash::make('kualat'),
            ],
        ]);
    }
}
