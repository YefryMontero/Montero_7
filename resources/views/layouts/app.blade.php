<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset("asset/lte/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
        body{
            background-color: #003B69;
        }


    </style>
</head>
<body>
    <div id="app">
      @include('layouts.header');

        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer');
    </div>
<!--- Scrip --->
    <script src="{{asset("js/app.js")}}"></script>
<!-- jQuery 3 -->
<script src="{{asset("asset/lte/bower_components/jquery/dist/jquery.min.js")}}"></script>
<script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery-validation/localization/messages_es.min.js') }}"></script>
<script src="{{asset("asset/lte/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("asset/lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("asset/lte/bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- Este script valida la función eliminar -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Hasta aquí -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/funciones.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("asset/lte/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("asset/lte/dist/js/demo.js")}}"></script>
@yield('scripts')
@yield('scriptsPlugins')
</body>
</html>
