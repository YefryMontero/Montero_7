@extends('layouts.app')

@section('content')
<div class="container">
<div class="form-group">
    <a href="{{route('home')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left   "></i> Volver
        </a>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div  class="card-header">{{ __('Clientes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('clientes')}}" class="btn btn-primary btn-block arrow-circle-left"><i class="fa fa-fw fa-users   "></i> Ingresar al Modulo Clientes
                 </a>
                </div>
            </div>
        </div> 
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Proveedores') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a  href="{{route('proveedores')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-users   "></i>  Ingresar al Modulo Proveedores 
                   
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <a href="{{route('usuarios')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-users   "></i> Ingresar al Modulo Usuarios</a>   
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('productos')}}" class="btn btn-primary btn-block">Ingresar al Modulo de Productos</a>
                </div>
            </div>
        </div>
    </div>
      <br>
       <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Roles') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('roles')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-user-tag"> </i> Ingresar al Modulo Roles</a>   
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Permisos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('permisos')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-address-card"></i>  Ingresar al Modulo Permisos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection