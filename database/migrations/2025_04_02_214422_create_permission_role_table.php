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
        // Verificación adicional de existencia de tabla
        if (!Schema::hasTable('permission_role')) {
            Schema::disableForeignKeyConstraints();
            
            Schema::create('permission_role', function (Blueprint $table) {
                $table->foreignId('permission_id')->constrained()->onDelete('cascade');
                $table->foreignId('role_id')->constrained()->onDelete('cascade');
                $table->primary(['permission_id', 'role_id']);
                
                // Opcional: índice adicional para búsquedas inversas
                $table->index(['role_id', 'permission_id']);
            });
            
            Schema::enableForeignKeyConstraints();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('permission_role');
        Schema::enableForeignKeyConstraints();
    }
};
