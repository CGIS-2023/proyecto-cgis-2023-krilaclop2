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
                'name' => "Admin",
                'email' => "admin@admin.com",
                'password' => Hash::make('12345678'),
            ],

            [
                'name' => "Administrativo 1",
                'email' => "administrativo1@administrativo.com",
                'password' => Hash::make('12345678'),
            ],

            [
                'name' => "Administrativo 2",
                'email' => "administrativo2@administrativo.com",
                'password' => Hash::make('12345678'),
            ],

            [
                'name' => "Médico 1",
                'email' => "medico1@medico.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Médico 2",
                'email' => "medico2@medico.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Enfermero 1",
                'email' => "enfermero1@enfermero.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => "Enfermero 2",
                'email' => "enfermero2@enfermero.com",
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}