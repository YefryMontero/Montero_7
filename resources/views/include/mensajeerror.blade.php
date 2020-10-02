@if (session("mensaje"))
    <div class="alert alert-warning alert-dismissible" data-auto-dismiss="1500">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i>Alerta del sistema!</h4>
        <ul text-center>
            <li>No tiene permisos para acceder a esta sección</li>
            <li>Acceso Denegado</li>
        </ul>
    </div>
@endif