@extends('layouts.public')
@section('title','Inicio|Restaurante')
@section('content')
<style>

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
        .hero h1, .hero h3{
            font-family: 'Nautilus Pompilius', sans-serif;
        }
        .hero h1 {
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
    <div class="hero" id="homee">
        <div class="subhero">
        <h3>Hola {{auth()->user()->name ?? auth()->user()->username}}</h3>
        <h1>¡Bienvenidos a La Cúpula Gourmet!</h1>
        <h1>Cena con tu<span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="s Amigos: Familia:s Compañeros" data-colors="orange"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
        <p>Descubre una experiencia culinaria excepcional en un entorno único.</p>
        <div class="book-btn">
            <a href="#reservacion" class="table-btn hvr-underline-from-center">Reservar Mesa</a>
        </div>
    </div>
    </div>
    <br>
    <div class="container-1">
        <div class="row" id="about">
            <!-- Columna para el texto -->
            <div class="col-md-8">
                <h2 class="reveal">Acerca de <br> Nosotros</h2>
                <p class="reveal">En el restaurante <em>"La Cúpula Gourmet"</em>, nuestra pasión por la comida es evidente en cada plato que servimos. Hemos estado sirviendo a la comunidad desde "2017" y nos enorgullece ser parte de esta hermosa ciudad.</p>
                <p class="reveal">Nuestro talentoso equipo de cocina, liderado por el chef <em>"Auguste Gusteau"</em>, trabaja incansablemente para crear experiencias culinarias inolvidables. Nos esforzamos por utilizar ingredientes frescos y locales en cada plato, y nuestra filosofía culinaria se basa en la calidad, la creatividad y el amor por la comida.</p>
            </div>
            <!-- Columna para la imagen -->
            <div class="col-md-4">
                <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/new_images/gallery_05.jpg" alt="Restaurante" class="restaurant-image reveal">
            </div>
        </div>
    </div>
    <br><br>
    {{-- *=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*= --}}
    {{-- *=*=*=*=*=*=*=*=  CARRUSEL SLIDER  *=*=*=*=*=*= --}}
    <article class="carr ">
        <h2 class="reveal">Descubre el Sabor y la Elegancia</h2>
        <h4 class="reveal">Explora nuestros platos de autor, sumérgete en eventos especiales y planifica tu próxima visita.
            <br> ¡Te esperamos para una experiencia culinaria inolvidable!"</h4>
           <div class="d-flex justify-content-center">
               <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/slider/1.jpg" class="d-block w-100" >
                    <div class="carousel-caption d-md-block">

                            <h4>Elegancia la de Francia xD</h4>
                           <p>Bienvenido a <em>Cupula Gourmet</em>,
                             donde la pasión por la cocina se encuentra con la hospitalidad excepcional. Con un equipo de profesionales dedicados a satisfacer las necesidades y deseos de los clientes</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/slider/2.jpg" class="d-block w-100" >
                    <div class="carousel-caption d-md-block">
                        <h4>"Nuestras Deliciosas Creaciones Culinarias"</h4>
                      <p>Descubre una amplia variedad de platos exquisitos que satisfarán tus sentidos. Desde platos gourmet hasta clásicos reconfortantes, nuestra cocina te llevará a un viaje culinario inolvidable.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/slider/3.jpg" class="d-block w-100" >
                    <div class="carousel-caption d-md-block">
                        <h4>"Nuestras Deliciosas Creaciones Culinarias"</h4>
                        <p>Descubre una amplia variedad de platos exquisitos que satisfarán tus sentidos. Desde platos gourmet hasta clásicos reconfortantes, nuestra cocina te llevará a un viaje culinario inolvidable.</p>
                    </div>
                  </div>
                  {{-- number 4 --}}
                  <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/slider/4.jpg" class="d-block w-100" >
                    <div class="carousel-caption d-md-block">
                        <h4>"Explora Nuestro Menú Variado"</h4>
                        <p>Sumérgete en nuestro menú diverso, lleno de sabores auténticos y opciones para todos los gustos. Desde aperitivos hasta postres, estamos seguros de que encontrarás algo que te encante.</p>
                    </div>
                  </div>
                  {{-- number 5 --}}
                  <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/slider/5.jpg" class="d-block w-100" >
                    <div class="carousel-caption d-md-block">
                        <h4>"Explora Nuestro Menú Variado"</h4>
                        <p>Sumérgete en nuestro menú diverso, lleno de sabores auténticos y opciones para todos los gustos. Desde aperitivos hasta postres, estamos seguros de que encontrarás algo que te encante.</p>
                    </div>
                  </div>
                  {{-- number 6 --}}
                  <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/slider/6.jpg" class="d-block w-100" >
                    <div class="carousel-caption d-md-block">
                        <h4>"Reservación al Aire Libre"</h4>
                        <p>Experimenta la belleza natural y la tranquilidad de nuestras áreas de comedor al aire libre. Nuestras mesas al aire libre ofrecen vistas espectaculares que te harán sentir como si estuvieras en un paraíso.</p>
                    </div>
                  </div>
                  {{-- number 7 --}}
                  <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/slider/7.jpg" class="d-block w-100" >
                    <div class="carousel-caption d-md-block">
                        <h4>"Reserva una Experiencia Única"</h4>
                        <p>Haz que tu visita sea aún más especial al reservar una mesa con nosotros. Disfruta de un ambiente acogedor y servicio excepcional mientras te relajas con amigos y familiares.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                </div>
           </div>
      </article>
    {{-- +=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+= --}}
    <br><br>
    {{-- +=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+= --}}
    <div class="container menu-t container-1" id="menu">
        <h2 class="mt-5 mb-4">Menú del Restaurante</h2>
        <p class="reveal">Te presentamos algunos de los platillos mas Recientes de nuestro menú</p>
        <div class="row">
            <!-- Ejemplo de plato 1 -->
            <div class="col-md-4 mb-4">
                <div class="menu-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/menu/menu-item-2.png" alt="Plato 1" class="img-fluid">
                    <div class="overlay">
                        <h3>Plato 1</h3>
                        <p>Descripción del Plato 1</p>
                        <p>Precio: $15.99</p>
                    </div>
                </div>
            </div>
            
            <!-- Ejemplo de plato 2 -->
            <div class="col-md-4 mb-4">
                <div class="menu-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/menu/menu-item-3.png" width="100%" alt="Plato 2" class="img-fluid">
                    <div class="overlay">
                        <h3>Plato 2</h3>
                        <p>Descripción del Plato 2</p>
                        <p>Precio: $12.99</p>
                    </div>
                </div>
            </div>
            <!-- Ejemplo de plato 2 -->
            <div class="col-md-4 mb-4">
                <div class="menu-item">
                    <img src="https://raw.githubusercontent.com/levi1405/rest_img/main/menu/plato1.jpg" width="100%" alt="Plato 2" class="img-fluid">
                    <div class="overlay">
                        <h3>Plato 2</h3>
                        <p>Descripción del Plato 2</p>
                        <p>Precio: $12.99</p>
                    </div>
                </div>
            </div>

            <!-- Agrega más ejemplos de platos aquí -->
        </div>
        <p class="reveal" style="font-size: 2em;">Ingresa a nuestro menu para <br>
             hacer pedidos en linea</p>
        {{-- +=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+= --}}
        <button id="redirect-menu">
            VER MENÚ
            <div id="clip">
                <div id="leftTop" class="corner"></div>
                <div id="rightBottom" class="corner"></div>
                <div id="rightTop" class="corner"></div>
                <div id="leftBottom" class="corner"></div>
            </div>
            <span id="rightArrow" class="arrow"></span>
            <span id="leftArrow" class="arrow"></span>
        </button>
        {{-- +=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+= --}}
        <script>
            // Obtener el botón por su ID
            const boton = document.getElementById("redirect-menu");
    
            // Agregar un manejador de eventos para redirigir al hacer clic
            boton.addEventListener("click", function() {
                // Redirige a la URL deseada
                window.location.href = "#about";
            });
        </script>
    </div>
    {{-- +=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+= --}}
    {{-- +=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+=+= --}}

    
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
<script src="{{asset('js/home.js')}}"></script>
@endsection
