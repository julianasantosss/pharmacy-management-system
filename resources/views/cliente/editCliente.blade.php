@extends('plantilla')
@section('contenido')
           
<br><br><br>
<div class="row mt-3">
    <div class="col-md-4 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Cliente</div>
            <div class="card-boy">

                <form id="frmCategorias" action="{{route('adit_cliente', $cli->id)}}" method="POST"  style=" width:590px;">
                @csrf
                @method('PUT')

                    <div class="input-group mb-3" style=" margin-top:50px;margin-right:500px;">
                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Cliente</label>
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="nombre_cliente" value="{{$cli->nombre_cliente}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Direccion</label>
                        <span class="input-group-text"><i class="fa-solid fa-house"></i></span>
                        <input type="text" name="direccion_cliente" value="{{$cli->direccion_cliente}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Telefono</label>
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" name="telefono_cliente" value="{{$cli->telefono_cliente}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                        <input type="hidden" name="dato" value="{{$cli->id}}">
                    <div class="d-gird col-6 mx-auto">
                        <button style="margin-left:30px; margin-top:30px;  margin-bottom:30px;" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>           

                </form>

            </div>
        </div>
    </div>
</div>

@endsection