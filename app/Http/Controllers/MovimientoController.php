<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimiento;
use App\Models\Producto;
use App\Models\Proveedor;


class MovimientoController extends Controller
{
    public function indexRelacion()
    {
       // return "Trabajando desde el Controlador.....";
    $movimientos =Movimiento::all();
    $proveedores = Proveedor::all();
    $productos =Producto::all();
    return view('relaciones/indexRelacion',compact('movimientos','proveedores', 'productos'));
    }

    public function form_crea_prod()
    {
        //return 'estoy en el controlador clientes';
        return view('mov/adicProducto');
    }

    public function adicRelacion(Request $campos){

        $relacion=new Movimiento();
        $relacion->cod_proveedor=$campos->cod_proveedor;
        $relacion->cod_producto=$campos->cod_producto;
        
        $relacion->save();

        return redirect()->route('relaciones')->with('Movimiento Agregado Correctamente....');

    }

    public function editar_rel($id)
    {
        $mov=Movimiento::find($id);
        //return $clien;
        $proveedores = Proveedor::all();
        $productos =Producto::all();
     
        return view('relaciones/editRelacion',compact('mov','proveedores', 'productos'));
  

    }
    
    public function editRelacion(Request $campos)
    {

        $id=$campos->dato;
        $relacion=Movimiento::find($id);
        $relacion->cod_proveedor=$campos->cod_proveedor;
        $relacion->cod_producto=$campos->cod_producto;
       
        $relacion->save();
        return redirect()->route('relaciones')->with('Movimiento Modificado Correctamente....');
    }

    public function elimRelacion(string $id)
    {
        //
        $relacion = Movimiento::find($id);
        $relacion->delete();
        return redirect('relaciones');
    }
}
