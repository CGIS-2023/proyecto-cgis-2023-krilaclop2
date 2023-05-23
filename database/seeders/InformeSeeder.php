<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informes')->insert([
            [
                'diagnostico' => "Influenza (gripe)",
                'riesgo' => "IV",
                'observaciones' => "Llega a urgencias con dolores de cabeza y tos severa. Fiebre alta: 38º.",
                'paciente_id'=> 1,
                'medico_id' => 2,
                'tratamiento_id' => 1,
                'cita_urgencia_id' => 1,
            ],
            [
                'diagnostico' => "Neumonía",
                'riesgo' => "III",
                'observaciones' => "Llega a urgencias con problemas respiratorios y dolor torácico.",
                'paciente_id'=> 2,
                'medico_id' => 1,
                'tratamiento_id' => 1,
                'cita_urgencia_id' => 2,
            ],
        ]);
    }
}
