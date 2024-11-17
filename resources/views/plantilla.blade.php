<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('../css/cruzar.png')}}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
</head>
<body>
<div class="container-fluid" >
            <nav class="navbar navbar-light" style="background-color:rgba(218,229,242,255); padding:10px ;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
                    <div class="container-fluid" style="height: 50px;">
                        <a class="navbar-brand" href="index.php"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                            <li class="nav-item" style=" margin-left: 10px; margin-bottom:30px;">
                                <h5><a class="nav-link" style=" margin-top:20px; margin-left:5px" href="index" ><i class="fa-sharp fa-solid fa-staff-snake fa-beat fa-2x"></i> La Cuna Dorada</a></h5>
                            </li>   
                            <li class="nav-item" style=" margin-top:33px;">
                                <a class="nav-link"   href="producto"  style=" margin-left: 100px;"><i class="fa-solid fa-tablets"></i>   Productos</a>
                            </li>
                            <li class="nav-item"  style=" margin-top:33px;">
                                <a class="nav-link"   href="categoria"  style=" margin-left: 60px;"><i class="fa-solid fa-stethoscope"></i>   Categorias Producto</a>
                            </li>                         
                            <li class="nav-item"  style=" margin-top:33px;">
                                <a class="nav-link"   href="proveedor"  style=" margin-left: 60px;"><i class="fa-solid fa-hospital-user"></i>   Provedores</a>
                            </li>
                            <li class="nav-item"  style=" margin-top:33px;">
                                <a class="nav-link"   href="cliente"  style=" margin-left: 80px;"><i class="fa-solid fa-user"></i>   Cliente</a>
                            </li> 
                            <li class="nav-item"  style=" margin-top:33px;">
                                <a class="nav-link"   href="relaciones"  style=" margin-left: 60px;"><i class="fa-solid fa-clipboard"></i>  Relaciones</a>
                            </li>
                            <li class="nav-item"  style=" margin-top:33px;">
                                <a class="nav-link"   href="factura"  style=" margin-left: 60px;"><i class="fa-solid fa-cart-shopping"></i>  Ventas</a>
                            </li>
                           
                            <li class="nav-item dropdown"  style=" margin-top:33px;width:170px;margin-left: 330px; ">   
                                <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-gear fa-spin"></i>  Más Opciones
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here  </a></li>
                                </ul>
                            </li>
                            
                             
                        </div>
                    </div>
                </nav>
            </div>
        <div class="container-fluid">
        </nav>


        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  <!-- plugins:js -->
  {!! Html::script('melody/vendors/js/vendor.bundle.base.js') !!}
    {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    {!! Html::script('melody/js/off-canvas.js') !!}
    {!! Html::script('melody/js/hoverable-collapse.js') !!}
    {!! Html::script('melody/js/misc.js') !!}
    {!! Html::script('melody/js/settings.js') !!}
    {!! Html::script('melody/js/todolist.js') !!}


    <!-- endinject -->
    <!-- Custom js for this page-->
    {{--  {!! Html::script('melody/js/dashboard.js') !!}  --}}
    <!-- End custom js for this page-->
   
@yield('contenido')

</div>
@yield('scripts')
</body>

<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('jss/r.js') }}"></script>
<script type="text/javascript" src="{{ asset('jss/p.js') }}"></script>

</html>