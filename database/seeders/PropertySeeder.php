<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            if (is_null(DB::table('properties')->find($i))) {
                DB::table('properties')->insert([
                    'id' => $i,
                    'name' => "物件A000{$i}",
                ]);
            }
        }
    }
}
