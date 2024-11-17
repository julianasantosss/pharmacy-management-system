
    <div class="input-group mb-3"  style=" margin-top:50px;">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style=" margin-left:100px;">Cliente</label>
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <select class="form-select" aria-label="Default select example" style="width: 400px" name="cliente" id="cliente" >
            <option selected></option>
            @forelse ($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->nombre_cliente}}</option>
            @empty    
            @endforelse    
        </select>
    </div>

    <div class="input-group mb-3">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style=" margin-left:100px;">Producto</label>
        <span class="input-group-text"><i class="fa-solid fa-prescription-bottle-medical"></i></span>
        <select class="form-select" aria-label="Default select example"  style="width: 400px" name="producto_id" id="producto_id1" >
            <option selected></option>
            @forelse ($productos as $producto)
                <option value="{{$producto->id}}">{{$producto->nombre_producto}}</option>
            @empty    
            @endforelse    
        </select>
    </div>

    <div class="input-group mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style=" margin-left:100px;">Cantidad</label>
        <span class="input-group-text"><i class="fa-solid fa-box"></i></span>
        <input type="text" name="cantidad" id="cantidad" class="form-control" maxlength="50" >
    </div>

    <div class="input-group mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label" style=" margin-left:100px;">Precio</label>
        <span class="input-group-text"><i class="fa-solid fa-coins"></i></span>
        <input type="text" name="precio" id="precio" class="form-control" maxlength="50" >
    </div>

    <div class="input-group mb-3">
    <label for="descuento" class="col-sm-2 col-form-label" style=" margin-left:100px;">Descuento</label>
        <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
        <input type="text" id="descuento" class="form-control" maxlength="50" >
    </div>

    <div class="form-group" >
        <button type="button" id="agregar" style="margin-top:30px; margin-left:726px; " name="agregar" class="btn btn-dark float-right">
        <i class="fa-solid fa-circle-plus" ></i>   Agregar Producto</button>
    </div>

    <div class="mb-3" style=" margin-left:110px; width:890px; margin-top:20px; margin-bottom:30px">
        <h4 class="card-title" style=" margin-bottom:30px">Detalles de Venta</h4>
        <div class="table-responsive col-md-12">
            <table id="detalles" class="table table-striped">
                <thead>
                   <tr>
                        <th style=" width:130px;">Eliminar</th>
                        <th style=" width:200px;">Producto</th>
                        <th style=" width:150px;">Precio(COP)</th>
                        <th style=" width:150px;">Cantidad</th>
                        <th style=" width:150px;">Subtotal (COP)</th>
                   </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL:</p>
                        </th>
                        <th>
                            <p align="right"><span id="total"> 0.00</span></p>
                        </th>
                    </tr>
                    <tr id="dvOcultar">
                        <th colspan="4">
                            <p align="right">TOTAL DESCUENTO:</p>
                        </th>
                        <th>
                            <p align="right"><span  id="total_descuento_html"  > 0.00</span>
                            <input type="hidden" name="descuento" id="total_descuento"></p>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL PAGAR:</p>
                        </th>
                        <th>
                            <p align="right"><span align="right" id="total_pagar_html"> 0.00</span>
                            <input type="hidden" name="total" id="total_pagar"> </p>
                        </th>
                    </tr>
                </tfoot>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>



                