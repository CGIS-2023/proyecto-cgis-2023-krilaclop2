<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitaUrgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cita_urgencias')->insert([
            [
                'fecha_hora' => "2023-04-21 12:25:00",
                'medico_id' => 2,
                'paciente_id' => 1,
                'enfermero_id' => 1,
            ],
            [
                'fecha_hora' => "2023-04-21 13:00:00",
                'medico_id' => 1,
                'paciente_id' => 2,
                'enfermero_id' => 1,
            ],
        ]);
    }
}
