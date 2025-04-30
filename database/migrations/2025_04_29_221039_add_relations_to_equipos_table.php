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
        Schema::table('equipos', function (Blueprint $table) {
            // Primero agregar las columnas sin restricción foránea
            $table->unsignedBigInteger('tipo_id')->after('id');
            $table->unsignedBigInteger('marca_id')->after('tipo_id');
            $table->unsignedBigInteger('modelo_id')->after('marca_id');
            $table->unsignedBigInteger('estado_id')->after('modelo_id');
            $table->unsignedBigInteger('user_id')->nullable()->after('estado_id');
            $table->string('codigo_activo')->unique()->after('user_id');
            $table->string('serial')->unique()->after('codigo_activo');
        });

        // Luego agregar las restricciones foráneas por separado
        Schema::table('equipos', function (Blueprint $table) {
            $table->foreign('tipo_id')->references('id')->on('cattipodeequipo');
            $table->foreign('marca_id')->references('id')->on('catmarcas');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('estado_id')->references('id')->on('estados_equipo');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipos', function (Blueprint $table) {
            //
        });
    }
};
