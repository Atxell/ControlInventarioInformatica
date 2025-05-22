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
        Schema::create('asignaciones_computadoras', function (Blueprint $table) {
            $table->id();
            
            // Relación con computadora (obligatoria)
            $table->foreignId('computadora_id')
                  ->constrained('datoscomputadora')
                  ->cascadeOnDelete();
            
            // Relación con diputado (opcional)
            $table->foreignId('diputado_id')
                  ->nullable()
                  ->constrained('diputados')
                  ->nullOnDelete();
            
            // Relación con ubicación (opcional)
            $table->foreignId('cubiculo_id')
                  ->nullable()
                  ->constrained('CatCubiculos')
                  ->nullOnDelete();
            
            // Campos adicionales
            $table->date('fecha_asignacion')->nullable();
            $table->date('fecha_retiro')->nullable();
            $table->text('notas')->nullable();
            
            $table->timestamps();
            
            // Índices para búsquedas rápidas
            $table->index('computadora_id');
            $table->index('diputado_id');
            $table->index('cubiculo_id');

            $table->unique(['computadora_id', 'fecha_retiro']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('asignaciones_computadoras');
    }
};
