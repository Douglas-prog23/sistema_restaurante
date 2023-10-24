@extends('layouts.app')

@section('content')
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

{{-- contenido --}}
<section class="container-fluid content">
{{-- Categorias --}}
<div class="row justify-content-center">
    <div class="col-10 col-md-12">
        <nav class="text-center my-5">
            @foreach ($categorias as $category)
            <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline">{{$category->nombre}}</a>
                
            @endforeach

        </nav>

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
@endsection
