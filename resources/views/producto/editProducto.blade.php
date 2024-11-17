@extends('plantilla')
@section('contenido')
           
<br><br><br>
<div class="row mt-3">
    <div class="col-md-4 offset-md-3"  style=" width:625px">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Producto</div>
            <div class="card-boy">

                <form id="frmCategorias" action="{{route('adit_prod', $producto->id)}}" method="POST"  style=" width:590px;">
                @csrf
                @method('PUT')

                    <div class="input-group mb-3" style=" margin-top:50px;margin-right:500px;">
                        <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Producto</label>
                        <span class="input-group-text"><i class="fa-solid fa-tablets"></i></span>
                        <input type="text" name="nombr_producto" value="{{$producto->nombre_producto}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Precio</label>
                        <span class="input-group-text"><i class="fa-solid fa-coins"></i></span>
                        <input type="text" name="precio_producto" value="{{$producto->precio_producto}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Stock</label>
                        <span class="input-group-text"><i class="fa-solid fa-truck-ramp-box"></i></span>
                        <input type="text" name="stock_producto" value="{{$producto->stock_producto}}" class="form-control" maxlength="50" placeholder="Categoria" required><br><br>
                    </div>

                    <div class="input-group mb-3">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style="margin-left:30px; margin-right:0px;">Categoria</label>
                        <span class="input-group-text"><i class="fa-solid fa-stethoscope"></i></span>
                        <select class="form-select" aria-label="Default select example"  style="width: 400px" name="categoria_producto">  
                            <option selected value="{{$producto->categoria_producto}}">{{$producto->categorias->descrip_categoria}}</option>
                            @forelse ($cats as $cat)               
                                <option value="{{$cat->id}}">{{$cat->descrip_categoria}}</option>
                                @empty    
                            @endforelse    
                        </select>
                    </div>


                        <input type="hidden" name="dato" value="{{$producto->id}}">
                    <div class="d-gird col-6 mx-auto">
                        <button style="margin-left:30px; margin-top:30px;  margin-bottom:30px;" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>           

                </form>

            </div>
        </div>
    </div>
</div>

@endsection