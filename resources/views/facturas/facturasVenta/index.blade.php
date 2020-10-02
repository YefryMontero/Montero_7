@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left"> </i> Volver</a>
    </div>
<div class="container-xl">
    @include('include.mensaje');
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Listado de las Facturas de Venta') }} 

                </div>
                <div class="card-body">
                    <a href="{{route('crear_venta')}}" class="btn btn-success btn-block"><i class="fa fa-fw fa-cash-register"></i> Registrar Factura </a>
                 <div class="container">
                   <div class="row">
                    <div class="col">
                        <form action="{{route('ventas')}}" method="GET">
                            <div class="form-group">
                                   <label>Filtros</label>
                                   <input type="text" name="busqueda" placeholder="Ingrese el numero de factura, tipo de pago, estado" class="form-control">
                               </div>
                                   <div class="form-group">
                                       <input type="submit"  value="Buscar" class="btn btn-success">
                                       <input type="submit"  value="Mostrar Todo" class="btn btn-success">
                               </div>
                           </form>
                    </div>
                    <div class="col">
                        <form action="{{route('ventas')}}" method="GET">
                            <div class="form-group">
                               <div  class="row">
                                <div  class="col">
                                   <label>Fecha inicio</label>
                                    <input type="date" name="inicio" class="form-control">
                                   </div>
                                   <div  class="col">
                                   <label>Fecha fin</label>
                                    <input type="date" name="fin" class="form-control">
                                   </div>
                               </div>
                            </div>
                                   <div class="form-group">
                                    <input type="submit"  value="Buscar" class="btn btn-success">
                               </div>
                           </form>
                    </div>   
                </div>
                 </div>
                     <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Numero Factura</th>
                            <th>Fecha Creacion</th>
                            <th>Valor neto</th>
                            <th>Valor Descuento</th>
                            <th>Valor Factura</th>
                            <th>Tipo Pago</th>
                            <th>Estado</th>
                            <th class="width90">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($objVenta as $venta)
                        <tr>
                            <td>{{$venta->numero_factura}}</td>
                            <td>{{$venta->created_at->toFormattedDateString()}}</td>
                            <td>{{number_format($venta->gran_total)}}</td>
                            <td>{{ number_format($venta->valor_descuento)}}</td>
                            <td> {{ number_format($venta->valor_factura)}}</td>
                            <td>{{$venta->tipo_pago}}</td>
                            <td>{{$venta->estado}}</td>
                        </tr> 
                        @endforeach

                    </tbody>
                </table>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection