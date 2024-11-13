<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
           
                $table->id();
                $table->string('nombre', 100);
                $table->string('email', 100)->unique();
                $table->string('contrasena', 100);
                $table->string('rol', 20);
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //Método vacio para la implementación eliminado de tablas y de columnas.
       Schema::dropIfExists('usuarios');
    }
};
