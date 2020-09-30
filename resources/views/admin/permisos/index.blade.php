@extends('layouts.app')

@section('content')
<div class="container">
<div class="form-group">
<a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left"> </i> Volver</a>
</div>
</div>
<div class="container">
  </div>
<div class="container-xl">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Listado Permisos') }}
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                        <div  class="col">
                            <div class="form-group">      
                                <a href="{{route('crear_permiso')}}" class="btn btn-success btn-block"><i class="fa fa-fw fa-plus-circle"> </i>Registrar Permiso </a>
                  </div>
                        </div>
                        <div  class="col">
                            <div class="form-group">    
                                <a href="{{route('permisos_rol')}}" class="btn btn-success btn-block"><i class="fa fa-fw fa-address-card"> </i>  Asignar permisos a los roles </a>
                    </div>
                        </div>
                        </div>
                    </div>
             

                   
                <br>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Fecha creacion</th>
                            <th>Nombre</th>
                            <th>permiso sistema</th>
                            <th class="width90">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($objPermisos as $permiso)
                        <tr>
                            <td>{{$permiso->created_at}}</td>
                            <td>{{$permiso->nombre}} </td>
                            <td>{{$permiso->slug}} </td>
                            <td> 
                                <div class="form-group">
                                <a href="#" class="btn btn-info"> <i class="fa fa-fw fa-edit"></i>  Editar</a>
                                <form action="{{route('eliminar_usuario', ['id' => $permiso->id])}}" class="d-inline form-eliminar" method="POST">
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