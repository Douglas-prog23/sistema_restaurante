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
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}"> --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<link href="https://fonts.cdnfonts.com/css/nautilus-pompilius" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<style>
    /* ///////////////////////////// */
    /* /////Importacion de fuente////////// */
    @import url('https://fonts.cdnfonts.com/css/nautilus-pompilius');

    body {
        background: url('https://raw.githubusercontent.com/Douglas-prog23/sistema_restaurante/main/public/img/backgroudApp%20(1)%20(1).jpg');
        background-attachment: fixed;
        background-size: cover;
    }

    .navbar-brand {
        padding-bottom: 0 !important;
        padding-top: 0 !important;
    }

    /* .navbar-brand img{
        position: absolute;
        bottom: -50px;
    } */
    .navbar,
    .perfil {
        background-color: rgba(0, 0, 0, 0.582);
        /* Fondo oscuro semitransparente */

    }

    .navbar-nav a {
        font-weight: bold;
        color: #fff;
        /* Color del texto */
        position: relative;
        transition: all 0.3s ease;
        /* Animación de 0.3 segundos */
    }

    .navbar-nav a:hover {
        color: #ff7010;
    }

    .navbar-nav a::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        /* Grosor del subrayado */
        bottom: 0;
        left: 0;
        background-color: #ff7010;
        transform: scaleX(0);
        /* Inicialmente, la animación comienza sin subrayado */
        transform-origin: bottom right;
        transition: transform 0.3s ease;
        /* Animación de 0.3 segundos */
    }

    .navbar-nav a:hover::before {
        transform: scaleX(1);
        /* Al pasar el puntero, se anima el subrayado */
        transform-origin: bottom left;
    }
    .car-drop{
    float:right;
    padding-right: 30px;
}
/* ---------- */
.car-drop .dropdown-menu{
    padding:20px;
    top:30px !important;
    width:350px !important;
    left:-110px !important;
    box-shadow:0px 5px 30px black;
    --bs-dropdown-bg: #cdcecfe7;
    --bs-btn-active-bg: #3c4247ce !important;
}
.car-drop .dropdown-menu:before{
    content: " ";
    position:absolute;
    top:-20px;
    right:50px;
    border:10px solid transparent;
    border-bottom-color:#fff;
}
 
.productlist {
    box-shadow: 0px 10px 30px rgb(0 0 0 / 10%);
    border-radius: 10px;
    height: 100%;
    overflow: hidden;
}

/* ------------------------------ */
.cart-detail{
    padding:15px 0px;
}
.cart-detail-img img{
    width:100%;
    height:100%;
    padding-left:15px;
}
.cart-detail-product p{
    margin:0px;
    color:#000;
    font-weight:500;
}
.cart-detail .price{
    font-size:15px;
    margin-right:10px;
    font-weight:500;
}
.cart-detail .count{
    color:#000;
}
.text-info{
    color: #000 !important;
    font-weight: bold;
    text-shadow: 0 0 4px #ff7010;
}
.btn-secondary{
    --bs-btn-bg: #231a12ba;
    --bs-btn-hover-bg: #6a685ca7;
}
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('https://raw.githubusercontent.com/levi1405/rest_img/main/new_images/Cupula_vreb.png') }}"
                        alt="" width="30%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @endguest
                        @auth
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#homee">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-nowrap"href="#about">ACERCA DE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#menu">MENÚ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}#reservacion">RESERVACIONES</a>
                            </li>
                        {{-- <a href="{{ route('shopping.cart') }}" class="btn btn-outline-dark">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>Carro<span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                        </a> --}}
                        
                                <div class="dropdown car-drop text-nowrap">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="dropdown">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="row total-header-section">
                                            @php $total = 0 @endphp
                                            @foreach((array) session('cart') as $id => $details)
                                                @php $total += $details['precio'] * $details['cantidad'] @endphp
                                            @endforeach
                                            <div class="col-lg-12 col-sm-12 col-12 total-section text-end">
                                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                            </div>
                                        </div>
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        <img src="{{ $details['imagen'] }}" class="img-fluid img-thumbnail" width="100px" height="100px"/>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <p>{{ $details['nombre'] }}</p>
                                                        <span class="price text-info"> ${{ $details['precio'] }}</span> <span class="count"> Cantidad:{{ $details['cantidad'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="{{ route('shopping.cart') }}" class="btn btn-secondary btn-block">Ver todo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu perfil dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)
                                        <a class="dropdown-item" href="{{ route('admin') }}">Area Admin</a>
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

    </div>
        <main class="py-4">
            @yield('content')
        </main>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js.map')}}"></script> --}}
    @yield('scripts')
</body>
{{-- //////////////////////////////////////// --}}
@include('layouts.footer')

</html>
