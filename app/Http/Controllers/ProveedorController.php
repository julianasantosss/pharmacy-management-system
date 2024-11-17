<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //

    public function indexProveedor()
    {
       // return "Trabajando desde el Controlador.....";
    $proveedors =Proveedor::all();
    return view('proveedor/indexProveedor',compact('proveedors'));
    }

    public function form_crea_prov()
    {
        //return 'estoy en el controlador clientes';
        return view('proveedor/adicProveedor');
    }

    public function adicProveedor(Request $campos){

        $proveedors=new Proveedor();
        $proveedors->nombre_proveedor=$campos->nombr_proveedor;
        $proveedors->direccion_proveedor=$campos->direc_proveedor;
        $proveedors->telefono_proveedor=$campos->tel_proveedor;
        $proveedors->web_proveedor=$campos->web_proveedor;

        $proveedors->save();

        return redirect()->route('proveedor')->with('Proveedor Agregado Correctamente....');

    }

    public function editar_dat($id)
    {
        $proveedors=Proveedor::find($id);
        //return $clien;
        $jum=Proveedor::find($proveedors);
        return view('proveedor/editproveedorr', ['prov'=>$proveedors]);
    }

    
    public function editProveedor(Request $campos)
    {

        $id=$campos->dato;
        $proveedors=Proveedor::find($id);
        $proveedors->nombre_proveedor=$campos->nombr_proveedor;
        $proveedors->direccion_proveedor=$campos->direc_proveedor;
        $proveedors->telefono_proveedor=$campos->tel_proveedor;
        $proveedors->web_proveedor=$campos->web_proveedor;

        $proveedors->save();
        return redirect()->route('proveedor')->with('Proveedor Modificado Correctamente....');
    }

    public function elimProveedor(string $id)
    {
        //
        $proveedors = Proveedor::find($id);
        $proveedors->delete();
        return redirect('proveedor');
    }
}
