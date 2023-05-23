<?php

namespace Database\Seeders;

use App\Models\Enfermero;
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
                'user_id'=> 6,
            ],
            [
                'nombre' => "Arturo",
                'apellidos' => "Suarez",
                'dni' => "92748374G",
                'sexo' => "Masculino",
                'fecha_nacimiento' => "1991-11-11",
                'correo' => "elreyarturo@hotmail.com",
                'user_id'=> 7,
            ],
        ]);

        $enfermero1 = Enfermero::find(1);
        $enfermero1->unidades()->attach(1, ['comienzo_turno' => "2023-05-23 8:00:00", 'fin_turno' => "2023-05-23 18:00:00"]);
    }
}
