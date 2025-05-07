<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('catmarcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('tipo_equipo_id');
            $table->timestamps();           
            $table->foreign('tipo_equipo_id')->references('id')->on('cattipodeequipo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('catmarcas');
    }
};
