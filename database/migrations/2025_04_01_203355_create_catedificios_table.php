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
        Schema::create('CatEdificios', function (Blueprint $table) {
            $table->id();
            $table->string('NombreEdificio', 100);
            //$table->string('Direccion', 200)->nullable();
            //$table->boolean('Activo')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('catedificios');
    }
};
