<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdministrativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrativos')->insert([
            [
                'nombre' => "Amparo",
                'apellidos' => "Vallejo",
                'dni' => "05628364B",
                'sexo' => "Femenino",
                'fecha_nacimiento' => "1948-02-27",
                'correo' => "ampval345@gmail.com",
                'user_id'=> 2,
            ],
            [
                'nombre' => "Teodosio",
                'apellidos' => "González",
                'dni' => "82647364W",
                'sexo' => "Masculino",
                'fecha_nacimiento' => "1970-03-02",
                'correo' => "teogonzalez123@gmail.com",
                'user_id'=> 3,
            ],
        ]);
    }
}
