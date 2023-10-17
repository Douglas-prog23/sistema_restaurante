<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/public/js/bootstrap.bundle.min.js.map">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    body{
      background: url('');
    }
    .navbar, .dropdown-menu{
              background-color: rgba(0, 0, 0, 0.582); /* Fondo oscuro semitransparente */
  
          }
          .navbar-nav a {
            font-weight: bold;
              color: #fff; /* Color del texto */
              position: relative;
              transition: all 0.3s ease; /* Animación de 0.3 segundos */
          }
          .navbar-nav a:hover{
            color: #ff7010;
          }
          .navbar-nav a::before {
              content: '';
              position: absolute;
              width: 100%;
              height: 2px; /* Grosor del subrayado */
              bottom: 0;
              left: 0;
              background-color: #ff7010;
              transform: scaleX(0); /* Inicialmente, la animación comienza sin subrayado */
              transform-origin: bottom right;
              transition: transform 0.3s ease; /* Animación de 0.3 segundos */
          }
          .navbar-nav a:hover::before {
              transform: scaleX(1); /* Al pasar el puntero, se anima el subrayado */
              transform-origin: bottom left;
          }
  </style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/Cupula.png')}}" alt=""  height="70px" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categorias.index')}}">CATEGORIAS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('platillos.index')}}">PLATILLOS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reservaciones.index')}}">RESERVACIONES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pedidos.index')}}">PEDIDOS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('restaurantes.index')}}">RESTAURANTE</a>
                    </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js.map')}}"></script>
</body>
</html>
