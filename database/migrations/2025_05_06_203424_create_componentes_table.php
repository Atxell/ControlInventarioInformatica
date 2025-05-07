<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('componentes', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('computadora_id')->constrained('datoscomputadora')->onDelete('cascade');
            $table->string('tipo_componente'); 
            $table->string('modelo');
            $table->string('especificaciones')->nullable();
            $table->string('numero_serie')->unique()->nullable();
            $table->string('generacion')->nullable();
            $table->string('capacidad')->nullable();
            $table->string('velocidad')->nullable();
            $table->string('tipo')->nullable();  
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('componentes');
    }
};
