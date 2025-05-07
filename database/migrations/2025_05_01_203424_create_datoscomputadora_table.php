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
        Schema::create('datoscomputadora', function (Blueprint $table) {
            $table->id();
            
            // Relaciones con catálogos (ESTAS DEBEN EXISTIR PREVIAMENTE)
            $table->foreignId('tipo_equipo_id')->constrained('cattipodeequipo');
            $table->foreignId('marca_id')->constrained('catmarcas');
            $table->foreignId('modelo_id')->constrained('catmodelos');
            
            // Campos originales que mencionaste
            $table->string('sistemaoperativo');
            $table->boolean('licenciaoriginal')->default(false);
            $table->string('versionOffice')->nullable();
            $table->string('nombre')->unique();
            $table->string('MAC')->unique()->nullable();
            $table->string('ip')->unique()->nullable();
            $table->string('estado');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datoscomputadora');
    }
};
