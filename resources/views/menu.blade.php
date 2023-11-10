@extends('layouts.public')

@section('title', 'Menu')
<style>
    .title{
        padding-top: 10px;
        text-align: center;
        color: rgb(255, 153, 0);
	font-family: 'Nautilus Pompilius', sans-serif;
    text-shadow: -1px -1px 0 black,
                1px -1px 0 black,
                  -1px 1px 0 black,
                  1px 1px 0 black;
    }
  </style>
@section('content')
            <h1 class="title">Menú</h1>
            @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
            <div class="container">
              <div class="row">
                @foreach ($platillos as $platillo)
                    <div class="col-md-3 col-6 mb-4 ">
                      <div class="card">
                        <img class="card-img-top" src="{{ asset($platillo->imagen) }}" style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                          <h4 class="card-title">{{$platillo->nombre}}</h4>
                          <h5 class="card-subtitle"><strong>Categoria: </strong>{{$platillo->category->nombre}}</h5>
                          <p>{{ Str::limit($platillo->descripcion, $limit = 62, $end = '...') }}</p>
                          <p class="card-text"><strong>Precio: </strong>{{$platillo->precio}}</p>
                          <p class="btn-holder"><a href="{{ route('addplatillo.to.cart', $platillo->id) }}" class="btn btn-outline-danger" role="button">Añadir a Carrito <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></p>
                        </div>
                      </div>
                    </div>
                @endforeach
              </div>
            </div>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js.map')}}"></script> --}}
@endsection