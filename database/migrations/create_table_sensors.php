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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->string('magnitud', 50);
            $table->string('ubicacion', 100)->nullable();
            $table->integer('id_puesto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //Este método se rellenaria si quisieramos borrar la tabla.
       Schema::dropIfExists('sensors');
    }
};
