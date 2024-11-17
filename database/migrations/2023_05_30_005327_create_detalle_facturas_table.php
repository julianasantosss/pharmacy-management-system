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
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura_id')->nullable();
            $table->unsignedBigInteger('cod_producto')->nullable();
            $table->integer('cant_vendida')->nullable();
            $table->decimal('monto_venta', 30)->nullable();

            $table->foreign('factura_id')->references('id')->on('facturas');
            $table->foreign('cod_producto')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_facturas');
    }
};
