<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            PacienteSeeder::class,
            MedicoSeeder::class,
            AdministrativoSeeder::class,
            UnidadSeeder::class,
            EnfermeroSeeder::class,
            CitaUrgenciaSeeder::class,
            TratamientoSeeder::class,
            InformeSeeder::class,
        ]);
    }
}
