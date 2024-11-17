<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categoria=new Categoria();
        $categoria->descrip_categoria='Medicamento';
        $categoria->save();

        $categoria=new Categoria();
        $categoria->descrip_categoria='Suministro';
        $categoria->save();

    }
}
