<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_proveedor');
            $table->unsignedBigInteger('cod_producto');
            $table->foreign('cod_proveedor')->references('id')->on('proveedors');
            $table->foreign('cod_producto')->references('id')->on('productos');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
