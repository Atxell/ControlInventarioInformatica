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
        Schema::create('CatCubiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ZonaID')->constrained('CatZonas');
            $table->string('NombreCubiculo', 50);
            $table->string('codigo', 25)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('catcubiculos');
    }
};
