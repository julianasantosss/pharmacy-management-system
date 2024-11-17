@extends('plantilla')
@section('contenido')



<div style="width :1600px" >
   
    <h2 style="margin-left: 200px;margin-top:50px; margin-bottom:40px;">Listado de Clientes</h2>



<div class="row mt-3">
    <div class="col-md-4 offset-md-10">
        <div class="d-gird mx-auto">
            <button class="btn btn-dark openModal"style="position: relative; right: 1150px;"data-op="1" data-bs-toggle="modal" data-bs-target="#modalProveedores">
            <i class="fa-solid fa-circle-plus" ></i> Añadir
            <!--<p><a href="{route('adici_prov')}}">  proveedor</a></p>-->
            </button>
        </div>
    </div>
</div>
<br><br>
<div style="margin-left: 200px; margin-top:0px ;background-color:rgba(255, 255, 255,0.738); padding:50px; margin-right:00px; border-radius:20px">


<center>
    <table >
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 75%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
            </style>
    <body>  

        <thead>
            <tr>
                <th>ID </th><th>Nombre Cliente</th><th>Direccion</th><th>Telefono</th><th>EDITAR</th><th>ELIMINAR</th>
            </tr>
        </thead>
        
    <tr>
        @forelse ($clientes as $cliente)
        <tr>
            <th align="left">{{$cliente->id}} </th>
            <th align="left">{{$cliente->nombre_cliente}}</th>
            <th align="left">{{$cliente->direccion_cliente}}</th>
            <th align="left">{{$cliente->telefono_cliente}}</th>
            
            <th><a href="{{route('cliente_editar', $cliente->id)}}"><img src="src/imagenes/editar.png"></th>
            <th><a onclick="return comfiElim()" href="{{route('elim_cliente', $cliente->id)}}"><img src="src/imagenes/eliminar.png"></th>
         </tr>
        @empty
            <li> Datos inexitentes </li> 
        @endforelse
    </body>

    </table>
</center>
</div>

</div>
<div class="modal fade" id="modalProveedores" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal">Añadir Cliente</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="close"></button>
            </div>
                <div class="modal-body">
                <form action="{{route('adicion_cliente')}}"  method="post"  href="proveedor">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="nombre_cliente" class="form-control" maxlength="50" placeholder="Nombre Cliente" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-house"></i></span>
                        <input type="text" name="direccion_cliente" class="form-control" maxlength="50" placeholder="Direccion" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" name="telefono_cliente" class="form-control" maxlength="50" placeholder="Telefono" required>
                    </div>

                    <div class="d-gird col-6 mx-auto">
                        <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>
                </form>
                </div>
                <div class="mosal-footer">
                    <button type="button" id="btnCerrar" style="position: relative; left: 420px; bottom: 10px;" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



@endsection