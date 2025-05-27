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
            $table->string('Num_inv')->unique();
            $table->string('nombre')->unique();
            $table->foreignId('tipo_equipo_id')->constrained('cattipodeequipo');
            $table->foreignId('marca_id')->constrained('catmarcas');
            $table->foreignId('modelo_id')->constrained('catmodelos');
            
            $table->foreignId('sistema_operativo_id')
                ->nullable()
                ->constrained('catsistemasoperativos')
                ->after('version_office_id');

            $table->boolean('licenciaoriginal')
                ->default(false);

            $table->foreignId('version_office_id')->constrained('catversionesdeoffice');
            $table->string('MAC')->unique()->nullable();
            $table->string('ip')->unique()->nullable();
            $table->foreignId('estado_id')->constrained('estados_equipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('datoscomputadora');
    }
};
