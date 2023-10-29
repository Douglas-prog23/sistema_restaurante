@extends('layouts.app')

@section('content')
<style>
    /* ///////////////////////////// */
    /* /////Importacion de fuente////////// */
    @font-face {
    font-family: 'nautilus_pompiliusregular';
    src: url('/public/fonts/nautilus-webfont.woff2') format('woff2'),
         url('/public/fonts/nautilus-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
    /* /////Header Encabezado////////// */
    .py-4 {
    padding-top: 0 !important;
    }
    .hero {
            background-image: url('https://raw.githubusercontent.com/levi1405/rest_img/main/new_images/banner.jpg');
            background-attachment:fixed;
            background-size:cover;
            height:500px;
            min-height:100%;
            background-position: center;
            color: white;
            text-shadow: -1px -1px 0 black,
                1px -1px 0 black,
                  -1px 1px 0 black,
                  1px 1px 0 black;
            text-align: center;
            margin-top: 0;
        }
        .subhero{
            background: rgba(0, 0, 0, 0.47);
            height:500px;
            padding: 100px 0;
            align-items: center;
        }
        .hero h1 {
            font-family: 'nautilus_pompiliusregular';
            color:#fff;
            padding-bottom: 0px;
            font-size: 4em;
        }

        .hero p {
            font-size: 1.5em;
        }

/* //////////////////////////////// */
/* ///  Boton Reservar Mesa  /////// */
/* //////////////////////////////// */
.book-btn a{
	background:rgb(255, 115, 0);
	color:#fff;
	min-width: 219px;
    padding: 10.5px 20px;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    font-weight: 800;
	text-transform:uppercase;
	font-size:18px;
}
.book-btn a:hover{
	border:3px solid rgb(255, 115, 0);
	background:none;
}
.hvr-underline-from-center {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
    overflow: hidden;
}

.hvr-underline-from-center:before {
    content: "";
    position: absolute;
    z-index: -1;
    left: 50%;
    right: 50%;
    bottom: 0;
    background: rgb(255, 115, 0);
    height: 2px;
    -webkit-transition-property: left, right;
    transition-property: left, right;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.hvr-underline-from-center:hover:before, .hvr-underline-from-center:focus:before, .hvr-underline-from-center:active:before {
    left: 0;
    right: 0;
}

</style>
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
{{-- ////////////////////
    ////////////////// --}}
    @auth
    <div class="hero">
        <div class="subhero">
        <h3>Hola {{auth()->user()->name ?? auth()->user()->username}}</h3>
        <h1>¡Bienvenidos a La Cúpula Gourmet!</h1>
        <h1>Cena con tu<span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="s Amigos: Familia:s Compañeros" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
        <p>Descubre una experiencia culinaria excepcional en un entorno único.</p>
        <div class="book-btn">
            <a href="#reservation" class="table-btn hvr-underline-from-center">Reservar Mesa</a>
        </div>
    </div>
    </div>
    @endauth

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>


</div>
<section class="container-fluid content">
{{-- Categorias --}}
<div class="row justify-content-center">
    <div class="col-10 col-md-12">
        <nav class="text-center my-5">
            @foreach ($categorias as $category)
            <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline">{{$category->nombre}}</a>
                
            @endforeach

        
        
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Carta 1 -->
                    @foreach ($platillos as $imagenes)

                    <div class="col-md-4 col-17 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('img/Cupula.png')}}" alt="{{$imagenes->name}}">
                            <div class="card-body">
                                <small class="card-txt-category">Categoria:{{$imagenes->category->nombre}}</small>
                                <h5 class="card-title my-2">{{$imagenes->category->descripcion}}</h5>
                                <div class="d-card-text">
                                    dsdsdsssssssssssssssssssssssssssssssssssssssssssssssss
                                    sddddddddddddddddddddddddddddddddddddddddddddddddddddd
                                    sdddddddddddddddddddddddddddddddddddddddddddddddddddds
                                </div> 
                                <a href="#" class="post-link"><b>Leer mas</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Douglas</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="card-txt-date">Hace dos semanas</span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                    
                        
                    @endforeach
                    </div>{{-- sierra el row --}}

            </div>

        </div>

    </div>

</div>

</section>




        </div>
    </div>
</div>
<script src="{{asset('js/writer.js')}}"></script>
@endsection
