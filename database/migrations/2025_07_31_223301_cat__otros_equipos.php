<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cat_otros_equipos', function (Blueprint $table) {
            $table->id();
            $table->string('Num_inv')->unique()->comment('Número de inventario del equipo');
            $table->string('ip')->unique()->nullable()->comment('Dirección IP del equipo, si aplica');
            $table->string('Nombre')->comment('Nombre o descripción del equipo');
            $table->string('Asignacion')->nullable()->comment('Persona o área a la que está asignado');
            $table->foreignId('estado_id')->constrained('estados_equipo')->comment('Estado del equipo');
            $table->foreignId('tipo_equipo_id')->constrained('cattipodeequipo')->comment('Tipo de equipo');
            $table->text('observaciones')->nullable()->comment('Observaciones adicionales');
            $table->timestamps();
            
            // Índices adicionales para mejorar el rendimiento en búsquedas comunes
            $table->index('Nombre');
            $table->index('Asignacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cat_otros_equipos');
    }
};