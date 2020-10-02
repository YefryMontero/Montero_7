@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left"> </i> Volver</a>
    </div>
        <div class="container">
            @include('include.mensaje')
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">{{ __('Lista de ventas') }} 
                        <div class="card-body">                
                             @include('cartera.form-filtros');
                             <table class="table table-striped table-bordered table-hover" id="tabla-data">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Cliente</th>
                                    <th>Valor Factura</th>
                                    <th>Valor Cancelado</th>
                                    <th>Estado</th>
                                    <th class="width90">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($objFacturasVenta as $venta)
                                <tr>
                                    <td>{{$venta->created_at->toFormattedDateString()}}</td>
                                    <td>{{$venta->clientes->nombre}}</td>
                                    <td> {{ number_format($venta->valor_factura)}}</td>
                                    <td>0</td>
                                    @if ($venta->estado === 0)
                                    <td>Pentiente por Abono</td>
                                    @else
                                    <td>Paga</td>
                                    @endif
                                <td><a href="{{route('ventas')}}" class="btn btn-info">Ver Detalle</a></td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div> 
                
        </div>
       
@endsection