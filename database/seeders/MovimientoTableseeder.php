<?php

namespace Database\Seeders;

use App\Models\Movimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovimientoTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $movimiento =new Movimiento();
        $movimiento->cod_proveedor="1";
        $movimiento->cod_producto="1";
        $movimiento->save();

        $movimiento =new Movimiento();
        $movimiento->cod_proveedor="2";
        $movimiento->cod_producto="2";
        $movimiento->save();

        $movimiento =new Movimiento();
        $movimiento->cod_proveedor="4";
        $movimiento->cod_producto="3";
        $movimiento->save();

        $movimiento =new Movimiento();
        $movimiento->cod_proveedor="6";
        $movimiento->cod_producto="4";
        $movimiento->save();

    }
}
