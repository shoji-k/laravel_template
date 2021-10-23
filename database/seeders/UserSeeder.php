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
        if (is_null(DB::table('users')->find(1))) {
            DB::table('users')->insert([
                'id' => 1,
                'name' => 'Admin user',
                'email' => 'admin@sample.com',
                'password' =>  Hash::make('password'),
                'type' => 'admin',
            ]);
        }
    }
}
