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
        Schema::create('stocks', function (Blueprint $table) {
           
            $table->integer('id_producto');
            $table->integer('id_proveedor');
            $table->integer('cantidad');
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //Método vacio para la implementación eliminado de tablas y de columnas.
       Schema::dropIfExists('stocks');
    }
};
