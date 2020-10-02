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
                <div  class="card-header">{{ __('Registrar Cliente') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('guardar_cliente')}}" method="POST">
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
                              <input type="text"  required name="num_id" placeholder="Ingrese el numero de Identificacion del Cliente" class="form-control">
                           </div>
                         </div>   
                    </div>
                   		<div class="row">
                        <div class="resultado"></div>
                   			<div class="col">
                   				<div class="form-group">
                   		        <label>Nombre </label>
                   		        <input type="text" required name="nombre" placeholder="Ingrese el nombre del Usuario" class="form-control">
                             	</div>
                   			</div>
                   			<div class="col">
                   				<div class="form-group">
                   		        <label>Apellido</label>
                   		        <input type="text" required name="apellido" placeholder="Ingrese el apellido del Cliente" class="form-control">
                            	</div>
                   			</div>
                    	</div>
                   <div class="row">
                       <div class="col">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" required name="celular" placeholder="Ingrese el Telefono del Cliente" class="form-control">
                        </div>
                       </div>
                       <div class="col">
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" required name="direccion" placeholder="Ingrese la d00ireccion del Cliente" class="form-control">
                        </div>
                       </div>
                   </div>
                   
                   	<div class="form-group">
                   		<label>Correo</label>
                   		<input type="text" required name="email" placeholder="Ingrese el Correo del Cliente" class="form-control">
                   	</div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Registrar Cliente </button>
                    </div>
                   </div>   
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection