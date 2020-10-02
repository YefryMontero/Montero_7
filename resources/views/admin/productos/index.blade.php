@extends('layouts.app')

@section('content')
<div class="container">
<div class="form-group">
<a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left"> </i> Volver</a>
</div>
</div>
<div class="container-xl">
    @include('include.mensaje');
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Listado Productos') }}
                </div>

                <div class="card-body">
                <div class="form-group">
                <a href="{{route('crear_producto')}}" class="btn btn-success btn-block"><i class="fa fa-fw fa-plus-circle"> </i> Registrar Producto </a>
                   <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Fecha Creacion</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Cantidad Actual</th>
                            <th class="width90">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($objProductos as $producto)
                        <tr>
                            <td>{{$producto->created_at}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->stock}}</td>
                            <td> 
                                <div class="form-group">
                                <a href="#" class="btn btn-info"> <i class="fa fa-fw fa-edit"></i>  Editar</a>
                                <form action="{{route('eliminar_usuario', ['id' => $producto->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC btn btn-danger" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash"></i>Eliminar
                                    </button>
                                </form>
                            </div>
                            </td>
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