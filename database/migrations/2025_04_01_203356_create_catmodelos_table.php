<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('catmodelos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('catmarcas');
        });
    }
    public function down()
    {
        Schema::dropIfExists('catmodelos');
    }
};
