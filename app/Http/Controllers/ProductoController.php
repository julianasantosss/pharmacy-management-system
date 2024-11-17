<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function indexProducto()
    {
       // return "Trabajando desde el Controlador.....";
    $productos =Producto::all();
    $cats = Categoria::all();
    return view('producto/indexProducto',compact('productos','cats'));
    }

    public function form_crea_prod()
    {
        //return 'estoy en el controlador clientes';
        return view('producto/adicProducto');
    }

    public function adicProducto(Request $campos){

        $producto=new Producto();
        $producto->nombre_producto=$campos->nombr_producto;
        $producto->precio_producto=$campos->precio_producto;
        $producto->stock_producto=$campos->stock_producto;
        $producto->categoria_producto=$campos->categoria_producto;
        

        $producto->save();

        return redirect()->route('producto')->with('Producto Agregado Correctamente....');

    }

    public function editar_dat($id)
    {
        $producto=Producto::find($id);
        //return $clien;
        $cats = Categoria::all();
        $jum=Producto::find($producto);
        return view('producto/editProducto',compact('producto','cats'));
  

    }

    
    public function editProducto(Request $campos)
    {

        $id=$campos->dato;
        $producto=Producto::find($id);
        $producto->nombre_producto=$campos->nombr_producto;
        $producto->precio_producto=$campos->precio_producto;
        $producto->stock_producto=$campos->stock_producto;
        $producto->categoria_producto=$campos->categoria_producto;

        $producto->save();
        return redirect()->route('producto')->with('Producto Modificado Correctamente....');
    }

    public function elimProducto(string $id)
    {
        //
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('producto');
    }
}
