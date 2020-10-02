@extends('layouts.app')
@section('scripts')
<script src="{{asset('js/pages/ventas/crear2.js')}}"> </script>
@endsection
@section('content')
<div class="container">
<div class="form-group">
<a href="{{route('ventas')}}" class="btn btn-primary btn-block"> Volver</a>
</div>
</div>
<div class="container-xl">
        <div class="col">
            <div class="card">
                <div  class="card-header">{{ __('Registrar Factura') }}</div>

                <div class="card-body">
                    @include('include.form-error')
                    <form action="{{route('guardar_venta')}}" method="POST">
                        @csrf
                   <div class="container" id="divFactura">
                       @include('facturas.facturasVenta.form')
                   </div> 
                   <button class="btn btn-success btn-block"><i class="fa fa-fw fa-save"> </i>Guardar Venta</button>  
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection