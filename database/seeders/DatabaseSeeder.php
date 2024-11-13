<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AlmacenaProductoTableSeeder::class,
            DetalleFacturaTableSeeder::class,
            DetallePedidoTableSeeder::class,
            FacturasTableSeeder::class,
            HistoricosTableSeeder::class,
            PedidosTableSeeder::class,
            ProductosTableSeeder::class,
            ProveedorsTableSeeder::class,
            PuestosTableSeeder::class,
            SensorsTableSeeder::class,
            StocksTableSeeder::class,
            UsuariosTableSeeder::class,
        ]);
    }
}
