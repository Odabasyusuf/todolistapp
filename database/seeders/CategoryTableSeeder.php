<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'user_id' => '1',
            'name' => 'Ev',
            'slug' => 'ev',
            'status' => '1',
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'user_id' => '1',
            'name' => 'Ofis',
            'slug' => 'ofis',
            'status' => '1',
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'user_id' => '1',
            'name' => 'Günlük',
            'slug' => 'gunluk',
            'status' => '1',
        ]);
    }
}
