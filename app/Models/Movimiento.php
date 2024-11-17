<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    public function Proveedor(){
        return $this->belongsTo(Proveedor::class, 'cod_proveedor');
    }

    public function Productos(){
        return $this->belongsTo(Producto::class, 'cod_producto');
    }
}
