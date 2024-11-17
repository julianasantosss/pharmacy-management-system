<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [      
        'fecha_factura',
        'descuento',
        'total',
        'cliente',
    ];
    use HasFactory;

    public function Clientes(){
        return $this->belongsTo(Cliente::class, 'cliente');
    }

    public function DetallesFactura(){
        return $this->hasMany(DetalleFactura::class);
    }


    
}
