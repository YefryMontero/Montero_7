@extends('layouts.app')
@section('content')
<div class="container">
<div class="form-group">
    <a href="/" class="btn btn-primary btn-block"> Volver</a>
</div>
</div>
<div class="container-xl">
        <div class="col">
            <div class="card">
                <div  class="card-header">{{ __('Registrar Usuario') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('guardar_usuario')}}" method="POST">
                        @csrf
                   <div class="container">
                   		<div class="row">
                   			<div class="col">
                   				<div class="form-group">
                   		        <label>Nombre </label>
                   		        <input type="text" name="name" placeholder="Ingrese el nombre completo del Usuario" class="form-control">
                             	</div>
                   			</div>
                    	</div>
                      	<div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>Tipo Identificaion</label>
                                <select class="form-control" name="tipo_id"> 
                                  <option>Cedula de Ciudadania</option>
                                </select>
                               </div>
                            </div>
                        <div class="col">
                           <div class="form-group">
                              <label>Identificacion</label>
                              <input type="text" name="num_id" placeholder="Ingrese el numero de Identificacion del usuario" class="form-control">
                           </div>
                         </div>   
                    </div>
                   <div class="row">
                       <div class="col">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" name="celular" placeholder="Ingrese el Telefono del usuario" class="form-control">
                        </div>
                       </div>
                       <div class="col">
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" name="direccion" placeholder="Ingrese la d00ireccion del usuario" class="form-control">
                        </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col" >
                   	<div class="form-group">
                   		<label>Correo</label>
                   		<input type="text" name="email" placeholder="Ingrese el Correo del usuario" class="form-control">
                       </div>
                    </div>
                       <div class="col">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password" placeholder="Ingrese la Contraseña del usuario" class="form-control">
                        </div>
                    </div>  
                </div>
                   	<div class="row">
                   
                    <div class="col">
                        <div class="form-group">
                            <label>Rol</label>
                            <select class="form-control" name="rol_id"> 
                                <option value="0">Seleccione un rol para el usuario</option>
                            @foreach ($objRoles as $rol)
                            <option value="{{$rol->id}}"> {{$rol->nombre}}</option> 
                            @endforeach
                        </select> 
                        </div>
                    </div>   
                    
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block"><i class="fa fa-fw fa-save"> </i> Guardar Usuario </button>
                    </div>
                   </div>   
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection