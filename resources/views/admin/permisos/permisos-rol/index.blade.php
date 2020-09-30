@extends('layouts.app')

@section('scripts')
<script src="{{asset("js/admin/permisoRol.js")}}" type="text/javascrip"> </script>
@endsection

@section('content')
<div class="container">
<div class="form-group">
    <a href="/" class="btn btn-primary btn-block"> Volver</a>
</div>
</div>
<div class="container">
 @include('include.btn');
  </div>
<div class="container-xl">
@csrf
   <table>
       <thead>
           <tr>
               <th>Permiso</th>
               @foreach ($arrayRoles as $id => $nombre)
               <th> {{$nombre}}</th>
               @endforeach
           </tr>
       </thead>
       <tbody>
           @foreach ($objPermisos as $key =>$permiso)
               <tr>
                   <td>
                       {${permiso['nombre']}}</td>
                       @foreach ($arrayRoles as $id => $nombre)
                       <td>
                       <input type="checkbox" class="permiso_rol"
                        name="permiso_rol[]"
                        data-permisoid={{$permiso["id"]}} value="{{id}}" {{in_array($id, array_column($arrayPermisosRol[$permiso["id"]],"id"))?"checkedc":""}}>
                       </td>
                       @endforeach
               </tr>
           @endforeach
       </tbody>
   </table>
</div>
   </div>
@endsection