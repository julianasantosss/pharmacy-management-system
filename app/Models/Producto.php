<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Producto extends Model
{
    use HasFactory;

    public function Categorias(){
        return $this->belongsTo(Categoria::class, 'categoria_producto');
    }

    public function DetFacts(){
        return $this->hasMany(DetalleFactura::class, 'id');
    }

    public function Movimientos(){
        return $this->hasMany(Movimiento::class, 'id');
    }
}


