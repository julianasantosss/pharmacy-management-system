<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $producto =new Producto();
        $producto->nombre_producto="Acetaminofen";
        $producto->precio_producto="$10000";
        $producto->stock_producto="3";
        $producto->categoria_producto="1";
        $producto->save();


        $producto =new Producto();
        $producto->nombre_producto="Ibuprofeno";
        $producto->precio_producto="$25000";
        $producto->stock_producto="4";
        $producto->categoria_producto="1";
        $producto->save();


        $producto =new Producto();
        $producto->nombre_producto="Rodilleras";
        $producto->precio_producto="$110000";
        $producto->stock_producto="6";
        $producto->categoria_producto="2";
        $producto->save();


        $producto =new Producto();
        $producto->nombre_producto="Tobillera Universal";
        $producto->precio_producto="$15000";
        $producto->stock_producto="4";
        $producto->categoria_producto="2";
        $producto->save();
    
    }
}
