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
    <a href="/" class="btn btn-primary btn-block"> Volver</a>
</div>
</div>
<div class="container-xl">
        <div class="col">
            <div class="card">
                <div  class="card-header">{{ __('Registrar Proveedor') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('guardar_proveedor')}}" method="POST">
                        @csrf
                   <div class="container">
                    <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>Tipo Identificaion</label>
                                <select class="form-control" name="tipo_id" id="tipo_id"> 
                                  <option>Cedula de Ciudadania</option>
                                  <option>Rut</option>
                                  <option>Nit</option>
                                </select>
                               </div>
                            </div>
                        <div class="col">
                           <div class="form-group">
                              <label>Identificacion</label>
                              <input type="text" name="num_id" placeholder="Ingrese el numero de Identificacion del Proveedor" class="form-control">
                           </div>
                         </div>   
                    </div>
                   		<div class="row">
                        <div class="resultado"></div>
                   			<div class="col">
                   				<div class="form-group">
                   		        <label>Nombre </label>
                   		        <input type="text" name="nombre" placeholder="Ingrese el nombre del Proveedor" class="form-control">
                             	</div>
                   			</div>
                   			<div class="col">
                   				<div class="form-group">
                   		        <label>Apellido</label>
                   		        <input type="text" name="apellido" placeholder="Ingrese el apellido del Proveedor" class="form-control">
                            	</div>
                   			</div>
                    	</div>
                   <div class="row">
                       <div class="col">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" name="celular" placeholder="Ingrese el Telefono del Proveedor" class="form-control">
                        </div>
                       </div>
                       <div class="col">
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" name="direccion" placeholder="Ingrese la d00ireccion del Proveedor" class="form-control">
                        </div>
                       </div>
                   </div>
                   
                   	<div class="form-group">
                   		<label>Correo</label>
                   		<input type="text" name="email" placeholder="Ingrese el Correo del Proveedor" class="form-control">
                   	</div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block"> <i class="fa fa-fw fa-save"> </i> Guardar Proveedor </button>
                    </div>
                   </div>   
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection