<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Montero</title>

            <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset("asset/lte/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #003B69;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" > <i class="fa fa-fw fa-house-user"></i>  Hogar</a>
                    @else
                        <a href="{{ route('login') }}"><i class="fa fa-fw fa-sign-in-alt"></i>  Iniciar Sesion</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <img src="{{asset('asset/img/logoMontero.png')}}" style="height: 400px;">
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Orden de Compra</a>
                    <a href="https://laracasts.com">Compra</a>
                    <a href="https://laravel-news.com">Recibos de pago</a>
                    <a href="https://blog.laravel.com">Pedidos</a>
                    <a href="https://nova.laravel.com">Envios</a>
                    <a href="https://forge.laravel.com">Ventas</a>
                    <a href="https://vapor.laravel.com">Inventario</a>
                    <a href="{{route('admin')}}">Administracion</a>
                </div>
            </div>
        </div>
    </body>
</html>
