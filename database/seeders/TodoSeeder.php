<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (is_null(DB::table('todos')->find(1))) {
            DB::table('todos')->insert([
                'id' => 1,
                'todo' => 'Buy milk',
                'done' => false,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ]);
        }
        if (is_null(DB::table('todos')->find(2))) {
            DB::table('todos')->insert([
                'id' => 2,
                'todo' => 'Walk for 30 mins',
                'done' => false,
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ]);
        }
    }
}
