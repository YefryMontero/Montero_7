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
                <div class="card-header">{{ __('Listado Productos en tu inventario') }}
                </div>

                <div class="card-body">
                   <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 <div class="container">
                    <form action="{{route('inventario')}}" method="GET">
                     <div class="row">
                            <label>Filtrar</label>
                        <div class="col">
                            <input type="text" name="busqueda" placeholder="Ingrese el nombre del producto que desea buscar" class="form-control">
                        </div>
                        <div class="col">
                                <input type="submit"  value="Buscar" class="btn btn-success">
                                <input type="submit"  value="Mostrar Todo" class="btn btn-success">

                        </div>
                     </div>
                    </form>
                 </div>
                 <br>
                     <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
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
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                        <td>
                           <div class="container"> 
                            <form action="{{route('actualizar_precio', ['id' => $producto->id])}}" method="POST">
                                @csrf
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control"  name="precio" value="{{$producto->precio}}">
                            <div class="input-group-append">
                               <button class="btn text-success"><i class="fa fa-fw fa-sync-alt"></i></button>
                            </div>
                          </div>
                        </form>
                        </td>
                            <td>
                                <div class="container"> 
                                    <form action="{{route('actualizar_cantidad', ['id' => $producto->id])}}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">{{$producto->unidad_medida}}</span>
                                            </div>
                                            <input type="text" class="form-control" name="stock" value="{{$producto->stock}}">
                                            <div class="input-group-append">
                                               <button class="btn text-success"><i class="fa fa-fw fa-sync-alt"></i></button>
                                            </div>
                                          </div>
                                    </form>
                                  </div></td>
                            <td> 
                                <div class="form-group">
                                <a href="#" class="btn btn-info"> <i class="fa fa-fw fa-eye"></i>Precios</a>
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