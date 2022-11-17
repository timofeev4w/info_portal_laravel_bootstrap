<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'first_name' => 'Александр',
            'second_name' => 'Комаров',
            'birth_date' => '06.06.1989',
            'phone' => '89643336437',
            'email' => 'nik@gmail.com',
            'auto_number' => 'О771ОК178',
            'password' => Hash::make('123456'),
            'info_updated_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
