<?php

namespace Database\Seeders;

use App\Models\DetalleFactura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleFacturaTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $detallefactura = new DetalleFactura();
        $detallefactura->factura_id="1";
        $detallefactura->cod_producto="3";
        $detallefactura->cant_vendida="1";
        $detallefactura->monto_venta="110000";
        $detallefactura->save();

        $detallefactura = new DetalleFactura();
        $detallefactura->factura_id="2";
        $detallefactura->cod_producto="2";
        $detallefactura->cant_vendida="1";
        $detallefactura->monto_venta="25000";
        $detallefactura->save();

        $detallefactura = new DetalleFactura();
        $detallefactura->factura_id="3";
        $detallefactura->cod_producto="1";
        $detallefactura->cant_vendida="1";
        $detallefactura->monto_venta="10000";
        $detallefactura->save();

    }
}
