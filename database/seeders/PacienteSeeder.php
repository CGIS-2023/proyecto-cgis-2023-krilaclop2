<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nombre' => "Marta",
                'apellidos' => "García",
                'dni' => "12345678F",
                'sexo' => "Femenino",
                'fecha_nacimiento' => "1997-04-13",
                'seguro' => "Adeslas",
                'correo' => "martgarlop@gmail.com",
            ],
            [
                'nombre' => "Luis",
                'apellidos' => "Torres",
                'dni' => "98765432S",
                'sexo' => "Masculino",
                'fecha_nacimiento' => "1994-09-23",
                'seguro' => "Sanitas",
                'correo' => "luisthebest@hotmail.com",
            ],
        ]);
    }
}
