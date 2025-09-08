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
        Schema::table('cat_otros_equipos', function (Blueprint $table) {
            $table->string('codigo_cubiculo', 25)->nullable()->after('tipo_equipo_id')
                  ->comment('Código del cubiculo donde se encuentra el equipo');
            
            // Agregar índice
            $table->index('codigo_cubiculo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('cat_otros_equipos', function (Blueprint $table) {
            $table->dropIndex(['codigo_cubiculo']);
            $table->dropColumn('codigo_cubiculo');
        });
    }
};