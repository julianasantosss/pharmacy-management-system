<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;

    protected $fillable = [
        'factura_id',
        'cod_producto',
        'cant_vendida',
        'monto_venta',
    ];
   
    public function factura(){
        return $this->belongsTo(Factura::class, 'factura_id');
    }

    public function Productos(){
        return $this->belongsTo(Producto::class, 'cod_producto');
    }
}
