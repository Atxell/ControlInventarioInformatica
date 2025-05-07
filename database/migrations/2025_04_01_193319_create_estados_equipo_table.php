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
        Schema::create('estados_equipo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Ej: Activo, En reparación, Baja
            $table->string('color')->default('#6c757d'); // Color para visualización
            $table->timestamps();
        });
        
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Ej: Oficina Central, Sucursal Norte
            $table->text('direccion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('estados_equipo');
    }
};
