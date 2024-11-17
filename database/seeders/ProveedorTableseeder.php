<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $proveedor =new Proveedor();
        $proveedor->nombre_proveedor="Bayer";
        $proveedor->direccion_proveedor="Cll 31 N1-90";
        $proveedor->telefono_proveedor="9032996";
        $proveedor->web_proveedor="bayer@gmail.com";
        $proveedor->save();

        $proveedor =new Proveedor();
        $proveedor->nombre_proveedor="Abbott";
        $proveedor->direccion_proveedor="kr 4ta este N3-45";
        $proveedor->telefono_proveedor="7890968";
        $proveedor->web_proveedor="abbott@gmail.com";
        $proveedor->save();

        $proveedor =new Proveedor();
        $proveedor->nombre_proveedor="Audifarma";
        $proveedor->direccion_proveedor="Diagonal 3ra N9-56";
        $proveedor->telefono_proveedor="5674351";
        $proveedor->web_proveedor="audifarma@gmail.com";
        $proveedor->save();

        $proveedor =new Proveedor();
        $proveedor->nombre_proveedor="BodySafe";
        $proveedor->direccion_proveedor="Kr 9na N13-53";
        $proveedor->telefono_proveedor="8019837";
        $proveedor->web_proveedor="bodysafe@gmail.com";
        $proveedor->save();

        $proveedor =new Proveedor();
        $proveedor->nombre_proveedor="UKA";
        $proveedor->direccion_proveedor="Cll 30 N29-11";
        $proveedor->telefono_proveedor="904732675";
        $proveedor->web_proveedor="uka@gmail.com";
        $proveedor->save();

        $proveedor =new Proveedor();
        $proveedor->nombre_proveedor="Jelt";
        $proveedor->direccion_proveedor="Av Américas 68";
        $proveedor->telefono_proveedor="5674532";
        $proveedor->web_proveedor="jelt@gmail.com";
        $proveedor->save();
    
    }
}
