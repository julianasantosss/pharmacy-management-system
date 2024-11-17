<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function indexCliente()
    {
       // return "Trabajando desde el Controlador.....";
    $clientes =Cliente::all();
  
    return view('cliente/indexCliente',compact('clientes'));
    }

    public function adicCliente(Request $campos){

        $cliente=new Cliente();
        $cliente->nombre_cliente=$campos->nombre_cliente;
        $cliente->direccion_cliente=$campos->direccion_cliente;
        $cliente->telefono_cliente=$campos->telefono_cliente;

        $cliente->save();

        return redirect()->route('cliente')->with('Cliente Agregado Correctamente....');

    }

    public function editar_cliente($id)
    {
        $cliente=Cliente::find($id);
        //return $clien;
        $jum=Cliente::find($cliente);
        return view('cliente/editCliente', ['cli'=>$cliente]);
    }

    
    public function editCliente(Request $campos)
    {

        $id=$campos->dato;
        $cliente=Cliente::find($id);
        $cliente->nombre_cliente=$campos->nombre_cliente;
        $cliente->direccion_cliente=$campos->direccion_cliente;
        $cliente->telefono_cliente=$campos->telefono_cliente;

        $cliente->save();
        return redirect()->route('cliente')->with('cliente Modificado Correctamente....');
    }

    public function elimCliente(string $id)
    {
        //
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('cliente');
    }
}
