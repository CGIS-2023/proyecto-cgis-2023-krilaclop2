<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnfermeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enfermeros')->insert([
            [
                'nombre' => "Carmen",
                'apellidos' => "Bernat",
                'dni' => "64392367D",
                'sexo' => "Femenino",
                'fecha_nacimiento' => "1984-07-09",
                'correo' => "carmenbernat@gmail.com",
                'turno' => "Triaje",
                'user_id'=> 6,
            ],
            [
                'nombre' => "Arturo",
                'apellidos' => "Suarez",
                'dni' => "92748374G",
                'sexo' => "Masculino",
                'fecha_nacimiento' => "1991-11-11",
                'correo' => "elreyarturo@hotmail.com",
                'turno' => "Tratamiento",
                'user_id'=> 7,
            ],
        ]);
    }
}
