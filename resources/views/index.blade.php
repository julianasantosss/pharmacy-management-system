@extends('plantilla')
@section('contenido')
<link rel="stylesheet" href="{{ asset('/css/stylesI.css')}}">

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
       <!-- Masthead-->
  <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-9" >
                        <div class="text-center text-white" >
                            <!-- Page heading-->
                            <h2 >¡Bienvenido al Sistema de Farmacia la Cuna Dorada!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <h4 style="margin-bottom: 20px;">Nuestros Servicios</h4>
                <div class="row">
                    <div class="col-lg-4" >
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3"> <a class="nav-link"   href="producto" >
                            <div class="features-icons-icon d-flex"><i class="bi-basket m-auto text-primary"></i></div>
                            <h5>Productos</h5>
                            <p class="lead mb-0">Gestión de Productos en Stock, permite agregar, editar y eliminar productos en el inventario. </p>
                        </div></a>
                    </div>
                    <div class="col-lg-4" ><a class="nav-link"   href="categoria">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3" >
                            <div class="features-icons-icon d-flex"><i class="bi-stack m-auto text-primary"></i></div>
                            <h5>Tipos de Producto</h5>
                            <p class="lead mb-0"> Permite crear, modificar y eliminar categorías para organizar los productos en el sistema.</p>
                        </div></a>
                    </div>
                    <div class="col-lg-4"><a class="nav-link"   href="producto">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3"> <a class="nav-link"   href="proveedor" >
                            <div class="features-icons-icon d-flex"><i class="bi-minecart-loaded m-auto text-primary"></i></div>
                            <h5>Proveedores</h5>
                            <p class="lead mb-0">Da la capacidad a agregar información de los proveedores con los que trabaja la farmacia</p>
                        </div></a>
                    </div>
                   
                </div>
                <div class="row">
                <div class="col-lg-4" ><a class="nav-link"   href="cliente">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3"> 
                            <div class="features-icons-icon d-flex"><i class="bi-person-circle m-auto text-primary"></i></div>
                            <h5>Clientes</h5>
                            <p class="lead mb-0">Permite al administrador administrar la información de los clientes, como actualizar detalles personales.</p>
                        </div></a>
                    </div>
                    <div class="col-lg-4"><a class="nav-link"   href="relaciones">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-clipboard-check m-auto text-primary"></i></div>
                            <h5>Gestión de Relaciones</h5>
                            <p class="lead mb-0">Permite al administrador establecer y gestionar la relación entre los productos y los proveedores correspondientes.</p>
                        </div></a>
                    </div>
                    <div class="col-lg-4"><a class="nav-link"   href="factura">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-cart-check m-auto text-primary"></i></div>
                            <h5>Ventas</h5>
                            <p class="lead mb-0">Procesamiento de ventas y transacciones de salidas de productos de la Farmacia.</p>
                        </div></a>
                    </div>
                </div>
            </div>
        </section>

@endsection