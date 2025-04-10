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
        Schema::create('cattipodeequipo', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Columna requerida por el seeder
            // $table->string('name'); // Usa esta si prefieres inglés
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cattipodeequipo');
    }
};
