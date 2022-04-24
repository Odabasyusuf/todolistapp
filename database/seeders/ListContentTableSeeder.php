<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListContentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('list_contents')->insert([
            'id' => 1,
            'list_heading_id' => '1',
            'name' => 'Ekmek',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 2,
            'list_heading_id' => '1',
            'name' => 'Süt',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 3,
            'list_heading_id' => '1',
            'name' => 'Makarna',
            'status' => '1',
        ]);


        DB::table('list_contents')->insert([
            'id' => 4,
            'list_heading_id' => '2',
            'name' => 'Elma',
            'status' => '0',
        ]);
        DB::table('list_contents')->insert([
            'id' => 5,
            'list_heading_id' => '2',
            'name' => 'Portakal',
            'status' => '0',
        ]);
        DB::table('list_contents')->insert([
            'id' => 6,
            'list_heading_id' => '2',
            'name' => 'Patates',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 7,
            'list_heading_id' => '2',
            'name' => 'Soğan',
            'status' => '1',
        ]);


        DB::table('list_contents')->insert([
            'id' => 8,
            'list_heading_id' => '3',
            'name' => 'A4 Kağıt',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 9,
            'list_heading_id' => '3',
            'name' => 'Not Defteri',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 10,
            'list_heading_id' => '3',
            'name' => 'Filtre Kahve',
            'status' => '0',
        ]);


        DB::table('list_contents')->insert([
            'id' => 11,
            'list_heading_id' => '4',
            'name' => 'Sunucular',
            'status' => '0',
        ]);
        DB::table('list_contents')->insert([
            'id' => 12,
            'list_heading_id' => '4',
            'name' => 'Bilgisayarlar',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 13,
            'list_heading_id' => '4',
            'name' => 'Kameralar',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 14,
            'list_heading_id' => '4',
            'name' => 'Ekipmanlar',
            'status' => '0',
        ]);

        DB::table('list_contents')->insert([
            'id' => 15,
            'list_heading_id' => '5',
            'name' => 'Salon',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 16,
            'list_heading_id' => '5',
            'name' => 'Mutfak',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 17,
            'list_heading_id' => '5',
            'name' => 'Banyo',
            'status' => '0',
        ]);


        DB::table('list_contents')->insert([
            'id' => 18,
            'list_heading_id' => '6',
            'name' => '10 Mekik',
            'status' => '1',
        ]);
        DB::table('list_contents')->insert([
            'id' => 19,
            'list_heading_id' => '6',
            'name' => '20 Şınav',
            'status' => '0',
        ]);
        DB::table('list_contents')->insert([
            'id' => 20,
            'list_heading_id' => '6',
            'name' => '15 Squat',
            'status' => '1',
        ]);
    }
}
