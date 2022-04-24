<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Yusuf Odabaş',
            'email' => 'yusuf@test.com',
            'password' => Hash::make('test'),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Test User',
            'email' => 'user@test.com',
            'password' => Hash::make('test'),
        ]);
    }
}
