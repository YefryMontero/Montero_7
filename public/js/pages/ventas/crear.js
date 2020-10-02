$('#addProducto').change( function () {
    console.log("Comienzo de funcion");
    var data = {
        producto_id: $('#addProducto').val(),
        cliente_id: $('#cliente_id').val(),
        numFactura: $('#numFactura').val(),
        _token: $('input[name=_token]').val()
    };
    ajaxRequest(data);
    
    console.log($('#addProducto').val());
    console.log($('#cliente_id').val());
    console.log($('#numFactura').val());
    var cantidad = $('#cantidad').val();
    var varUnitario = $('#valorUnitario').val();
    var vrt = cantidad *varUnitario ;
    console.log( $('#cantidad').val());
    $('#valorUnitario').val(vrt);
    $("#divProducto").append("<br>texto añadido al final del párrafo.");
    console.log("Termino Funcion");
});

function ajaxRequest (data) {
    $.ajax({
        url: '/facturas/ventas',
        type: 'POST',
        data: data,
        success: function (respuesta) {
            ValidacionesMontero.notificaciones(respuesta.respuesta, 'Biblioteca', 'success');
        }
    });
}
