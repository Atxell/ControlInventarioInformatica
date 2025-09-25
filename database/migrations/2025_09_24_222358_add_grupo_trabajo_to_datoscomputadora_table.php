<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('datoscomputadora', function (Blueprint $table) {
            $table->string('grupo_trabajo', 50)->nullable()->after('estado_id');
        });
    }

    public function down()
    {
        Schema::table('datoscomputadora', function (Blueprint $table) {
            $table->dropColumn('grupo_trabajo');
        });
    }
};