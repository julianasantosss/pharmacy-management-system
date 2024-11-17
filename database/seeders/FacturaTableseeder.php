<?php

namespace Database\Seeders;

use App\Models\Factura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturaTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $factura =new Factura();
        $factura->fecha_factura="2023-06-22 15:04:21";
        $factura->descuento="3000";
        $factura->total="110000";
        $factura->cliente="1";
        $factura->save();

        $factura =new Factura();
        $factura->fecha_factura="2023-06-22 15:04:21";
        $factura->descuento="10000";
        $factura->total="25000";
        $factura->cliente="2";
        $factura->save();

        $factura =new Factura();
        $factura->fecha_factura="2023-06-22 15:04:21";
        $factura->descuento="100";
        $factura->total="10000";
        $factura->cliente="3";
        $factura->save();

    
    }
}
