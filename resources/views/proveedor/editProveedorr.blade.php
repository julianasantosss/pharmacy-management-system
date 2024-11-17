@extends('plantilla')
@section('contenido')
           
<br><br><br>
<div class="row mt-3">
    <div class="col-md-4 offset-md-3"  style=" width:650px">
        <div class="card">
            <div class="card-header bg-dark text-white" style=" width:625px">Editar Proveedor</div>
            <div class="card-boy">

                <form id="frmCategorias" action="{{route('adit_prov', $prov->id)}}" method="POST">
                @csrf
                @method('PUT')

                    <div class="input-group mb-3" style="margin-top:50px;width:600px">
                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Proveedor</label>
                        <span class="input-group-text"><i class="fa-solid fa-hospital-user"></i></span>
                        <input type="text" name="nombr_proveedor" value="{{$prov->nombre_proveedor}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3"  style=" width:600px">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Direccion</label>
                        <span class="input-group-text"><i class="fa-solid fa-house"></i></span>
                        <input type="text" name="direc_proveedor" value="{{$prov->direccion_proveedor}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3 " style=" width:600px">
                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Telefono</label>
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" name="tel_proveedor" value="{{$prov->telefono_proveedor}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3"  style=" width:600px">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Pagina Web</label>
                        <span class="input-group-text"><i class="fa-solid fa-globe"></i></span>
                        <input type="text" name="web_proveedor" value="{{$prov->web_proveedor}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                        <input type="hidden" name="dato" value="{{$prov->id}}">
                    <div class="d-gird col-6 mx-auto"  style="margin-left:30px; margin-top:40px;  margin-bottom:30px;">
                        <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection