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
        Schema::create('enfermero_unidad', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('unidad_id')->constrained()->onDelete('cascade');
            $table->foreignId('enfermero_id')->constrained()->onDelete('cascade');
            $table->dateTime('comienzo_turno');
            $table->dateTime('fin_turno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfermero_unidad');
    }
};
