<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetalleFactura;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call([ProductoTableSeeder::class]);
        // Proveedor::factory(100)->create();

        $this->call([CategoriaTableseeder::class]);
        $this->call([ProveedorTableseeder::class]);
        $this->call([ProductoTableseeder::class]);
        $this->call([MovimientoTableseeder::class]);
        $this->call([ClienteTableseeder::class]);
        $this->call([FacturaTableseeder::class]);
        $this->call([DetalleFacturaTableseeder::class]);

    }
}
