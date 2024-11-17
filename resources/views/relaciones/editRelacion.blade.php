@extends('plantilla')
@section('contenido')
           
<br><br><br>
<div class="row mt-3">
    <div class="col-md-4 offset-md-3"  style=" width:625px">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Relación</div>
            <div class="card-boy">

                <form id="frmCategorias" action="{{route('adit_rel', $mov->id)}}" method="POST"  style=" width:590px;">
                @csrf
                @method('PUT')

                    <div class="input-group mb-3" style=" margin-top:50px;margin-right:500px;">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Producto</label>
                        <span class="input-group-text"><i class="fa-solid fa-stethoscope"></i></span>
                        <select class="form-select" aria-label="Default select example"  style="width: 400px" name="cod_producto">  
                            <option selected value="{{$mov->cod_producto}}">{{$mov->productos->nombre_producto}}</option>
                            @forelse ($productos as $prod)               
                                <option value="{{$prod->id}}">{{$prod->nombre_producto}}</option>
                                @empty    
                            @endforelse    
                        </select>
                    </div>

                    <div class="input-group mb-3" >
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Proveedor</label>
                        <span class="input-group-text"><i class="fa-solid fa-stethoscope"></i></span>
                        <select class="form-select" aria-label="Default select example"  style="width: 400px" name="cod_proveedor">  
                            <option selected value="{{$mov->cod_proveedor}}">{{$mov->proveedor->nombre_proveedor}}</option>
                            @forelse ($proveedores as $prov)               
                                <option value="{{$prov->id}}">{{$prov->nombre_proveedor}}</option>
                                @empty    
                            @endforelse    
                        </select>
                    </div>

                        <input type="hidden" name="dato" value="{{$mov->id}}">
                    <div class="d-gird col-6 mx-auto">
                        <button style="margin-left:30px; margin-top:30px;  margin-bottom:30px;" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>           

                </form>

            </div>
        </div>
    </div>
</div>

@endsection