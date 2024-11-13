<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        // Limpiar la tabla antes de insertar los datos
        DB::table('usuarios')->truncate();
        
        $path = database_path('seeders/sql/usuarios.sql');
        DB::unprepared(File::get($path));
    }
}
