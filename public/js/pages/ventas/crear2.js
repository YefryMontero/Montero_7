$('#addProducto').change( function () {
    console.log("Comienzo de funcion");
    var data = {
        producto_id: $('#addProducto').val(),
        cliente_id: $('#cliente_id').val(),
        numFactura: $('#numFactura').val(),
        _token: $('input[name=_token]').val()
    };
    ajaxRequest('/facturas/ventas/producto', data);
    
    console.log($('#addProducto').val());
    console.log($('#cliente_id').val());
    console.log($('#numFactura').val());
    var cantidad = $('#cantidad').val();
    var varUnitario = $('#valorUnitario').val();
    var vrt = cantidad *varUnitario ;
    console.log( $('#cantidad').val());
    $('#valorTotal').val(vrt);
    $('#divProducto').append('Hola');
});

function ajaxRequest (url ,data) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (respuesta) {
            ValidacionesMontero.notificaciones(respuesta.respuesta, 'Biblioteca', 'success');
        }
    });
}
