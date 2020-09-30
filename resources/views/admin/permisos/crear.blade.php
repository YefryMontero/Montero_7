@extends('layouts.app')
@section('scripts')
<script src="{{asset('js/pages/admin/permiso.js')}}" type="text/javascript"></script>
@endsection
@section('content')
<div class="container">
<div class="form-group">
    <a href="{{route('permisos')}}" class="btn btn-primary btn-block"><i class="fa fa-fw fa-arrow-circle-left"> </i> Volver</a>
</div>
</div>
<div class="container-xl">
        <div class="col">
            <div class="card">
                <div  class="card-header">{{ __('Registrar Permiso') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('guardar_permiso')}}" method="POST">
                        @csrf
                   <div class="container">
                   		<div class="row">
                   			<div class="col">
                   				<div class="form-group">
                   		        <label>Nombre </label>
                   		        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del Permiso" class="form-control" required autocomplete="off">
                             	</div>
                   			</div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                              <label>Slug </label>
                              <input type="text" name="slug" id="slug" placeholder="Ingrese el slug del permiso" class="form-control" required>
                              </div>
                        </div>
                      </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block"><i class="fa fa-fw fa-save"> </i>  Guardar Permiso </button>
                    </div>
                   </div>   
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection