@extends('layouts.app')

@section("scripts")
<script src="{{asset("js/pages/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="container">
<div class="form-group">
<a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left   "></i> Volver</a>
</div>
</div>
<div class="container">
  </div>
<div class="container-xl">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Listado Usuarios') }}
                </div>

                <div class="card-body">
                <a href="{{route('crear_usuario')}}" class="btn btn-success btn-block"><i class="fa fa-fw fa-user-plus"> </i>  Registrar Usuario </a>
                   <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre Completo</th>
                            <th>Tipo Identificacion</th>
                            <th>Identificacion</th>
                            <th>Celular</th>
                            <th>Direccion</th>
                            <th>Correo</th>
                            <th>Roles</th>
                            <th class="width90">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($objUsuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->tipo_id}}</td>
                            <td>{{$usuario->num_id}}</td>
                            <td>{{$usuario->celular}}</td>
                            <td>{{$usuario->direccion}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                @foreach ($usuario->roles_usuario as $rol)
                                 {{$loop->last ? $rol->nombre : $rol->nombre . ', '}}   
                                @endforeach
                            <td> 
                                <div class="form-group">
                                <a href="#" class="btn btn-info"> <i class="fa fa-fw fa-edit"></i>  Editar</a>
                                </div>
                                <div class="form-group">
                                <form action="{{route('eliminar_usuario', ['id' => $usuario->id])}}" class="d-inline form-eliminar" method="DELETE  ">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC btn btn-danger" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash-alt"></i>Eliminar
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