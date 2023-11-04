<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/public/js/bootstrap.bundle.min.js.map">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<link href="https://fonts.cdnfonts.com/css/nautilus-pompilius" rel="stylesheet">
<style>
    /* ///////////////////////////// */
    /* /////Importacion de fuente////////// */
    @import url('https://fonts.cdnfonts.com/css/nautilus-pompilius');

    body{
      background: url('https://raw.githubusercontent.com/Douglas-prog23/sistema_restaurante/main/public/img/backgroudApp.jpg');
      background-attachment:fixed;
      background-size:cover;
    }
    .navbar-brand{
        padding-bottom: 0 !important;
        padding-top:0 !important;
    }
    /* .navbar-brand img{
        position: absolute;
        bottom: -50px;
    } */
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
          .navbar-nav a::before{
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
                    <img src="{{asset('https://raw.githubusercontent.com/levi1405/rest_img/main/new_images/Cupula_vreb.png')}}" alt=""  width="30%" >
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
                        @auth
                        @foreach ($categorias as $categoria)
                        <li class="nav-item">
        <a class="nav-link" data-target="#{{ $categoria->slug }}">{{ $categoria->nombre }}</a>
    @endforeach
                            </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#homee">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap"href="#about">ACERCA DE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">MENÚ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reservation">RESERVACIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#comenta">COMENTA</a>
                    </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if(auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)
                                    <a class="dropdown-item" href="{{route('admin')}}">Area Admin</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        </main>
    </div>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js.map')}}"></script> --}}
</body>
{{-- //////////////////////////////////////// --}}
@include('layouts.footer')
</html>
