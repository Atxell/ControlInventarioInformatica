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
        Schema::create('procesadores', function (Blueprint $table) {
            $table->id(); 
            $table->string('marca', 50);
            $table->string('tipo', 50);
            $table->string('generacion', 10);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('CatProcesadores', function (Blueprint $table) {
            //
        });
    }
};
