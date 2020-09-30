@extends('layouts.app')

@section('content')
<div class="container">
<div class="form-group">
<a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left"> </i> Volver</a>
</div>
</div>

<div class="container-xl">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Listado Proveedores') }}
                </div>

                <div class="card-body">
                <a href="{{route('crear_proveedor')}}" class="btn btn-success btn-block">Registrar Proveedor </a>
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
                            <th>Tipo Identificacion</th>
                            <th>Identificacion</th>
                            <th>Celular</th>
                            <th>Direccion</th>
                            <th>Correo</th>
                            <th class="width90">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($objProveedores as $proveedor)
                        <tr>
                            <td>{{$proveedor->created_at}}</td>
                            <td>{{$proveedor->nombre}}</td>
                            <td>{{$proveedor->tipo_id}}</td>
                            <td>{{$proveedor->num_id}}</td>
                            <td>{{$proveedor->celular}}</td>
                            <td>{{$proveedor->direccion}}</td>
                            <td>{{$proveedor->email}}</td>
                            <td> 
                                <div class="form-group">
                                <a href="#" class="btn btn-info"> <i class="fa fa-fw fa-edit"></i>  Editar</a>
                                <form action="{{route('eliminar_usuario', ['id' => $proveedor->id])}}" class="d-inline form-eliminar" method="POST">
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