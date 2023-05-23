<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tratamientos')->insert([
            [
                'nombre' => "Paracetamol",
                'tipo' => "Farmacoterapia",
                'dosis' => "1 pastillas cada 8 horas",
            ],
            [
                'nombre' => "Apendicectomía ",
                'tipo' => "Cirugía",
                'dosis' => "NA",
            ],
            [
                'nombre' => "Dieta Blanda",
                'tipo' => "Dietoterapia",
                'dosis' => "NA",
            ],
            [
                'nombre' => "Reposo Domiciliario",
                'tipo' => "Reposo",
                'dosis' => "NA",
            ],
            [
                'nombre' => "Urbason",
                'tipo' => "Farmacoterapia",
                'dosis' => "4-20 mg/kg",
            ],
            [
                'nombre' => "Cesárea",
                'tipo' => "Cirugía",
                'dosis' => "NA",
            ],
        ]);
    }
}
