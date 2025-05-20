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
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Código único de ubicación
            $table->foreignId('cubiculo_id')->constrained('CatCubiculos'); // Relación directa al cubiculo
            
            // Datos del edificio (podrías mantener solo el ID si prefieres hacer joins)
            $table->string('edificio_nombre', 100);
            $table->string('edificio_direccion', 200)->nullable();
            $table->string('edificio_referencia', 200)->nullable();
            
            // Datos de la zona/planta
            $table->string('zona_planta', 20);
            
            // Datos del cubiculo
            $table->string('cubiculo_nombre', 50);
            
            // Estado activo
            $table->boolean('activo')->default(true);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion');
    }
};