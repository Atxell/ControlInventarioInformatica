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
       /* Schema::create('computadora_ram', function (Blueprint $table) {
            $table->foreignId('computadora_id')->constrained('datoscomputadora')->onDelete('cascade');
            $table->foreignId('componente_id')->constrained('componentes')->onDelete('cascade');
            $table->primary(['computadora_id', 'componente_id']);
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('computadora_ram', function (Blueprint $table) {
            //
        });
    }
};
