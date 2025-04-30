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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Ej: "ProBook 450", "Inspiron 15"
            $table->foreignId('marca_id')->constrained('catmarcas'); // Relación
            $table->timestamps();
            
            $table->unique(['nombre', 'marca_id']); // Evita duplicados por marca
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
