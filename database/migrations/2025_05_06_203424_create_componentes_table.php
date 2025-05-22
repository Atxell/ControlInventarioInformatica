<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('componente_computadora', function (Blueprint $table) {
            $table->id();
            
            // Relación con la computadora (única)
            $table->foreignId('computadora_id')
                    ->unique() 
                    ->constrained('datoscomputadora')
                   // Esto asegura que cada computadora solo tenga un registro aquí
                    ->onDelete('cascade');
            
            // Relaciones con los componentes
            $table->foreignId('procesador_id')->constrained('procesadores');
            $table->foreignId('disco_duro_id')->constrained('catdiscosduros');
            $table->foreignId('memoria_id')->constrained('catmemorias');
            
            // Puedes agregar campos adicionales si necesitas
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('componente_computadora');
    }
};
