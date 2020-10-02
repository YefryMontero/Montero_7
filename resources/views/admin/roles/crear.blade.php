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
                <div  class="card-header">{{ __('Registrar Rol') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('guardar_rol')}}" method="POST">
                        @csrf
                   <div class="container">
                   		<div class="row">
                   			<div class="col">
                   				<div class="form-group">
                   		        <label>Nombre </label>
                   		        <input type="text" name="nombre" placeholder="Ingrese el nombre del rol" class="form-control">
                             	</div>
                               </div>
                   		</div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block"><i class="fa fa-fw fa-save"> </i> Guardar Rol </button>
                    </div>
                   </div>   
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection