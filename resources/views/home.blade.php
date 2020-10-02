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
                    <label>En las ventas encontras tus ultimas ventas realizadas, asi como los filtros para que busques tus ventas por numero, rango de fechas, valores maximos y minimo, asi como el poder de registrar nuevas ventas o modificar una ya existente </label>
                    <a href="{{route('ventas')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-money-check-alt"></i>Ventas</a>
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
                    <label>En el inventario se te mostraras tus productos registrados, la cantidad que tienes disponibles de cada uno de ellos, el precio promedio en el que compras tus productos, el precio recomendable de venta y un pequeño filtro que te permite buscar el producto que quieres de una forma mas rapida </label>
                 <a href="{{route('inventario')}}" class="btn btn-primary btn-block"> <i class="fa fa-fw fa-truck-loading"></i>  Inventario</a>   
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
                    <label> En la Administracion se te mostrara una serie de opciones entre cuales esta el control de tus clientes, proveedores y productos, ademas el control de los usuarios que pueden utilizar tu aplicacion asi como su funcion "Rol" en la aplicacion y los permisos que tienen estos dentro de tu aplicacion </label>
                    <a href="{{route('admin')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-toolbox"></i> Administracion</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
     
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Cartera') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <label>En el inventario se te mostraras tus productos registrados, la cantidad que tienes disponibles de cada uno de ellos, el precio promedio en el que compras tus productos, el precio recomendable de venta y un pequeño filtro que te permite buscar el producto que quieres de una forma mas rapida </label>
                 <a href="{{route('cartera')}}" class="btn btn-primary btn-block"> <i class="fa fa-fw fa-truck-loading"></i>  Inventario</a>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
