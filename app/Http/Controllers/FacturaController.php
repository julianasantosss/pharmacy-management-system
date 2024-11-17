<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Purchase;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\DetalleFactura;
use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Producto;
use Carbon\Carbon;

class FacturaController extends Controller
{
    public function indexFactura(){
    $facturas =Factura::all();
  
    return view('factura/indexFactura',compact('facturas'));
    }

    public function adicFacturaa(){
        $clientes =Cliente::all();
        $productos = Producto::all();
        return view('factura/createFactura',compact('clientes','productos'));
    }

    public function insertFactura(Request $request, Factura $factura)
    {
        
        $factura = Factura::create($request->all()+[
            'fecha_factura'=>Carbon::now(),
            'descuento'=>$request->descuento,
        ]);     
      
        foreach ($request->producto_id as $key => $producto) {
            $results[] = array("cod_producto"=>$request->producto_id[$key], "cant_vendida"=>$request->cantidad[$key], "monto_venta"=>$request->precio[$key]);
        }

        $factura->DetallesFactura()->createMany($results);

        return redirect()->route('factura')->with('Factura Agregado Correctamente....');

    }
 
    public function elimFactura(string $id)
    {
        //Eliminar Registros de detalles factura:
        DetalleFactura::where('factura_id', $id)->delete();
        $factura = Factura::find($id);
        $factura->delete();
        return redirect('factura');
 
    }
  
}
