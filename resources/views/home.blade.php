@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Ventas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a  class="btn btn-primary btn-block"> Ingresar a las Ventas</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Compras') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary btn-block"><i class="fa fa-fw fa-shopping-cart"></i>  Ingresar a las Compras</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
     
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Invnetario') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <a href="route('inventario')" class="btn btn-primary btn-block"> <i class="fa fa-fw fa-truck-loading"></i>  Ingresar al Inventario</a>   
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Aministracion') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-toolbox"></i> Ingresar a la Administracion</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
