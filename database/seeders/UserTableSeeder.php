<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'persona_id' => 1,
                'password' => Hash::make('111'),
                'rol' => 'admin',
                'estado' => 'activo',
            ],
            [
                'name' => 'medico',
                'email' => 'medico@gmail.com',
                'persona_id' => 2,
                'password' => Hash::make('111'),
                'rol' => 'medico',
                'estado' => 'activo',
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'persona_id' => 3,
                'password' => Hash::make('111'),
                'rol' => 'user',
                'estado' => 'activo',
            ]
        ]);
    }
}
