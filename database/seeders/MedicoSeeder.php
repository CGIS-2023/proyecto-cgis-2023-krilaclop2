<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
        [
            'nombre' => "Consuelo",
            'apellidos' => "Martínez",
            'dni' => "12393889G",
            'sexo' => "Femenino",
            'fecha_nacimiento' => "1956-04-13",
            'correo' => "consuelomart56@gmail.com",
            'especialidad' => "Alergología",
            'user_id'=> 4,
        ],
        [
            'nombre' => "José Carlos",
            'apellidos' => "Caño",
            'dni' => "92039322V",
            'sexo' => "Masculino",
            'fecha_nacimiento' => "1967-09-23",
            'correo' => "josecarloscaño@hotmail.com",
            'especialidad' => "Cardiología",
            'user_id'=> 5,
        ],
    ]);
    }
}
