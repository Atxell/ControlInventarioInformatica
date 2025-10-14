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
            // Agregar campos de ubicación
            $table->foreignId('edificio_id')->nullable()->after('tipo_equipo_id')->constrained('catedificios');
            $table->foreignId('zona_id')->nullable()->after('edificio_id')->constrained('catzonas');
            $table->foreignId('cubiculo_id')->nullable()->after('zona_id')->constrained('catcubiculos');
            
            // Eliminar codigo_cubiculo ya que ahora usaremos la relación completa
            $table->dropColumn('codigo_cubiculo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('cat_otros_equipos', function (Blueprint $table) {
            $table->dropForeign(['edificio_id']);
            $table->dropForeign(['zona_id']);
            $table->dropForeign(['cubiculo_id']);
            
            $table->dropColumn(['edificio_id', 'zona_id', 'cubiculo_id']);
            
            // Restaurar codigo_cubiculo
            $table->string('codigo_cubiculo', 25)->nullable();
        });
    }
};
