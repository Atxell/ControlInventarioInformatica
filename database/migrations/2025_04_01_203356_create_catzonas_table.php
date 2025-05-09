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
        Schema::create('CatZonas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('EdificioID')->constrained('CatEdificios');
            $table->string('NombreZona', 100);
            $table->string('Descripcion', 200)->nullable();
            $table->integer('Piso')->nullable();
            $table->boolean('Activo')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('catzonas');
    }
};
