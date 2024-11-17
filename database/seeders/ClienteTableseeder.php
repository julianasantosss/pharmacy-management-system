<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cliente =new Cliente();
        $cliente->nombre_cliente="Daniel Rodriguez";
        $cliente->direccion_cliente="Cll 31 N1-90";
        $cliente->telefono_cliente="9043768996";
        $cliente->save();

        $cliente =new Cliente();
        $cliente->nombre_cliente="Diego Barajas";
        $cliente->direccion_cliente="Kr 4ta N21-72";
        $cliente->telefono_cliente="3159042760";
        $cliente->save();

        $cliente =new Cliente();
        $cliente->nombre_cliente="David Garcia";
        $cliente->direccion_cliente="Transv 5 2-45";
        $cliente->telefono_cliente="3116782534";
        $cliente->save();

    }
}
