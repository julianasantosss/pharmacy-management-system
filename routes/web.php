<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\MovimientoController;
use App\Models\Movimiento;
use App\Models\Proveedor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Ruta Vista Principal *********************************
route::get('/index', [CategoriaController::class, 'indexP']);


//Rutas Categorias *********************************
route::get('/categoria', [CategoriaController::class, 'indexCategoria'])->name('categorias');
route::post('/categoria/agregarCategoria',[CategoriaController::class, 'agregarCategoria'])->name('adici_categoria');
route::get('/categoria/elimCategoria/{id}', [CategoriaController::class, 'elimCategoria'])->name('elim_cat');
route::get('/categoria/editar_cat/{id}', [CategoriaController::class, 'editar_cat'])->name('categoria_editar');
route::put('/categoria/editCategoria', [CategoriaController::class, 'editCategoria'])->name('adit_cat');


//Rutas Proveedores ********************************
route::get('/proveedor', [ProveedorController::class, 'indexProveedor'])->name('proveedor');
route::post('/proveedor/adicProveedor',[ProveedorController::class, 'adicProveedor'])->name('adicion_proveesss');
route::get('/proveedor/editar_dat/{id}', [ProveedorController::class, 'editar_dat'])->name('proveedor_editar');
route::put('/proveedor/editProveedor', [ProveedorController::class, 'editProveedor'])->name('adit_prov');
route::get('/clientes/elimProveedor/{id}', [ProveedorController::class, 'elimProveedor'])->name('elim_prov');



//Rutas Productos ********************************
route::get('/producto', [ProductoController::class, 'indexProducto'])->name('producto');
route::post('/producto/adicProducto',[ProductoController::class, 'adicProducto'])->name('adicion_produc');
route::get('/producto/editar_dat/{id}', [ProductoController::class, 'editar_dat'])->name('producto_editar');
route::put('/producto/editProducto', [ProductoController::class, 'editProducto'])->name('adit_prod');
route::get('/producto/elimProducto/{id}', [ProductoController::class, 'elimProducto'])->name('elim_prod');

//Rutas Cliente ********************************
route::get('/cliente', [ClienteController::class, 'indexCliente'])->name('cliente');
route::post('/cliente/adicionarCliente',[ClienteController::class, 'adicCliente'])->name('adicion_cliente');
route::get('/cliente/editar_cliente/{id}', [ClienteController::class, 'editar_cliente'])->name('cliente_editar');
route::put('/cliente/editCliente', [ClienteController::class, 'editCliente'])->name('adit_cliente');
route::get('/cliente/elimCliente/{id}', [ClienteController::class, 'elimCliente'])->name('elim_cliente');

//Rutas Factura ********************************
route::get('/factura', [FacturaController::class, 'indexFactura'])->name('factura');
route::get('/factura/editar_factura/{id}', [FacturaController::class, 'editar_factura'])->name('factura_editar');
route::get('/factura/elimFactura/{id}', [FacturaController::class, 'elimFactura'])->name('elim_factura');
route::get('/factura/irFactura',[FacturaController::class, 'adicFacturaa'])->name('create_facturas');
route::post('/factura/adicionarFactura',[FacturaController::class, 'insertFactura'])->name('insert_facturaa');

//Rutas Movimiento ********************************
route::get('/relaciones', [MovimientoController::class, 'indexRelacion'])->name('relaciones');
route::post('/relaciones/adicRelacion',[MovimientoController::class, 'adicRelacion'])->name('adicion_relacion');
route::get('/relaciones/editarRelacion/{id}', [MovimientoController::class, 'editar_rel'])->name('relacion_editar');
route::put('/relaciones/editRelacion', [MovimientoController::class, 'editRelacion'])->name('adit_rel');
route::get('/relaciones/elimRelacion/{id}', [MovimientoController::class, 'elimRelacion'])->name('elim_relacion');










