<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListHeadingTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('list_headings')->insert([
            'id' => 1,
            'user_id' => '1',
            'category_id' => '1',
            'name' => 'Market Alınacaklar',
            'status' => '1',
        ]);

        DB::table('list_headings')->insert([
            'id' => 2,
            'user_id' => '1',
            'category_id' => '1',
            'name' => 'Manav Alınacaklar',
            'status' => '0',
        ]);

        DB::table('list_headings')->insert([
            'id' => 3,
            'user_id' => '1',
            'category_id' => '2',
            'name' => 'İhtiyaçlar',
            'status' => '0',
        ]);

        DB::table('list_headings')->insert([
            'id' => 4,
            'user_id' => '1',
            'category_id' => '2',
            'name' => 'Bakım / Onarım',
            'status' => '1',
        ]);

        DB::table('list_headings')->insert([
            'id' => 5,
            'user_id' => '1',
            'category_id' => '3',
            'name' => 'Temizlik',
            'status' => '1',
        ]);

        DB::table('list_headings')->insert([
            'id' => 6,
            'user_id' => '1',
            'category_id' => '3',
            'name' => 'Spor',
            'status' => '0',
        ]);
    }
}
