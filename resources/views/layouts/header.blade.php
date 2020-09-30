
<div class="container"  style="background-color: #003B69;">
<nav class="navbar navbar-expand-md  shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"
        >
              <img src="{{asset("asset/img/logoTomateMontero.png")}}" style="width: auto; height: 80px; border-radius: 15px;  " >
              <img src="{{asset("asset/img/logoLetrasMonteroMejoresFrutos.png")}}" style="width: 200px; height: auto; border-radius: 15px;  " >     
 </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>          
        </div>
    </div>
    <div class="container" >
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="#">Compras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ventas</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Inventario</a>
            </li>
          </ul>
    </div>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-fw fa-sign-in-alt"></i> {{ __('Iniciar Sesion') }}</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-fw fa-user"></i>     {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                      <i class="fa fa-fw fa-sign-out-alt"></i>   {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
</div>