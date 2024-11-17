
$(document).ready(function() {
    $("#agregar").click(function () {
        agregar();
    });
});


var cont = 0;
total = 0;
subtotal = [];


function agregar() {

    producto_id = $("#producto_id1").val();
    producto = $("#producto_id1 option:selected").text();
    cantidad = $("#cantidad").val();
    precio = $("#precio").val();
    descuento = $("#descuento").val();

    if (producto_id != "" && cantidad != "" && cantidad > 0 && precio != "") {
        subtotal[cont] = cantidad * precio;
        total = total + subtotal[cont];
        var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="producto_id[]" value="'+producto_id+'">'+producto+'</td> <td> <input type="hidden" id="precio[]" name="precio[]" value="' + precio + '"> <input class="form-control" type="number" id="precio[]" value="' + precio + '" disabled> </td>  <td> <input type="hidden" name="cantidad[]" value="' + cantidad + '"> <input class="form-control" type="number" value="' + cantidad + '" disabled> </td> <td align="right">$' + subtotal[cont] + ' </td></tr>';
        cont++;
        limpiar();
        totales();
        evaluar();
        $('#detalles').append(fila);
    } else {
        Swal.fire({
            type: 'error',
            text: 'Rellene todos los campos del detalle de la compras',

        })
    }
}


function limpiar() {
    $("#cantidad").val("");
    $("#precio").val("");
    $("#descuento").val("");
}

function totales() {
    $("#total").html("COP $" + total.toFixed(2));
    total_descuento = total * descuento / 100;
    total_pagar = total - total_descuento;
    $("#total_descuento_html").html("COP $" + total_descuento.toFixed(2));
    $("#total_descuento").val(total_descuento.toFixed(2));
    $("#total_pagar_html").html("COP $" + total_pagar.toFixed(2));
    $("#total_pagar").val(total_pagar.toFixed(2));
}

function evaluar() {
    if (total > 0) {
        $("#guardar").show();
    } else {
        $("#guardar").hide();
    }
}

function eliminar(index) {
    total = total - subtotal[index];
    descuento * subtotal / 100;
    total_descuento = total * descuento / 100;
    total_pagar_html = total - total_descuento;
    $("#total").html("COP $" + total);
    $("#total_descuento").html("COP $" + total_descuento);
    $("#total_pagar_html").html("COP $" + total_pagar_html);
    $("#total_pagar").val(total_pagar_html.toFixed(2));
    $("#fila" + index).remove();
   
}