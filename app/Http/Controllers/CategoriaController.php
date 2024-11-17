<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function indexP()
    {
        return view('index');
    }


    public function indexCategoria()
    {
        // return "Trabajando desde el Controlador.....";
        $categorias =Categoria::all();
        return view('categoria/indexCategoria',compact('categorias'));
    }

    public function agregarCategoria(Request $campos){

        $categorias=new Categoria();
        $categorias->descrip_categoria=$campos->desc_cate;
   
        $categorias->save();

        return redirect()->route('categorias')->with('Proveedor Agregado Correctamente....');

    }


    public function editar_cat($id)
    {
        $categorias=Categoria::find($id);
        //return $clien;
        $jum=Categoria::find($categorias);
        return view('categoria/editCategoria', ['cat'=>$categorias]);
    }

    public function editCategoria(Request $campos)
    {

        $id=$campos->dato;
        $categoria=Categoria::find($id);
        $categoria->descrip_categoria=$campos->descrip_categoria;

        $categoria->save();
        return redirect()->route('categorias')->with('Categoria Modificada Correctamente....');
    }

    public function elimCategoria(string $id)
    {
        //
        $producto = Categoria::find($id);
        $producto->delete();
        return redirect('categoria');
    }

}

