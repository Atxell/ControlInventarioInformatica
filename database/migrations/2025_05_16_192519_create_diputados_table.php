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
        Schema::create('Diputados', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('Diputados', function (Blueprint $table) {
            //
        });
    }
};
