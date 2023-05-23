<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita_urgencias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha_hora');
            $table->foreignId('medico_id')->constrained()->onDelete('cascade')->nullable()->default("Elige un médico");
            $table->foreignId('paciente_id')->constrained()->onDelete('cascade');
            $table->foreignId('enfermero_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita_urgencias');
    }
};
