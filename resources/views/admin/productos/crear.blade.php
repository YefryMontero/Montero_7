@extends('layouts.app')
@section('scripts')
<script>
 $(document).ready(function(){
  $("tipo_id").change(function(){
    alert("The text has been changed.");
  });
});
</script>

@endsection
@section('content')
<div class="container">
<div class="form-group">
<a href="{{route('productos')}}" class="btn btn-primary btn-block"> Volver</a>
</div>
</div>
<div class="container">
    @include('include.form-error');
        <div class="col">
            <div class="card">
                <div  class="card-header">{{ __('Registrar Producto') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('guardar_producto')}}" method="POST">
                        @csrf
                   <div class="container">
                   				<div class="form-group">
                   		        <label>Nombre </label>
                                   <input type="text" name="nombre" placeholder="Ingrese el nombre del prducto que se va a vender" class="form-control" value="{{old('nombre')}}">
                             	</div>
                   				<div class="form-group">
                   		        <label>Descripcion</label>
                   		        <input type="text" required name="descripcion" placeholder="Ingrese una descripcion del producto que se va a vender" class="form-control" value="{{old('descripcion')}}">
                                </div>
                                <div class="form-group">
                                    <label>Unidad de medidad</label>
                                    <select class="form-control" name="unidad_medida"> 
                                        <option>Seleccione en que unidad vendes el producto</option>
                                        <option> Libra</option> 
                                        <option> Kilogramos</option>
                                        <option> Canastillas</option> 
                                        <option> Medios</option> 
                                        <option> Bultos</option>  
                                    </select> 
                                </div>
                   <div class="row">
                       <div class="col">
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" required name="precio" placeholder="Ingrese el precio del producto" class="form-control" value="{{old('precio')}}">
                        </div>
                       </div>
                       <div class="col">
                        <div class="form-group">
                            <label>Cantidad Actual</label>
                            <input type="text" required name="stock" placeholder="Ingrese la cantidad actual que hay del producto" class="form-control" value="{{old('stock')}}">
                        </div>
                       </div>
                   </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block"><i class="fa fa-fw fa-save"> </i> Guardar Producto </button>
                    </div>
                   </div>   
                </form>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection