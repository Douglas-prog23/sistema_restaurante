@extends('layouts.app')

@section('template_title')
    {{ $platillo->name ?? "{{ __('Show') Platillo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Platillo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('platillos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $platillo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $platillo->category->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $platillo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            @if ($platillo->estado == 1)
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $platillo->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $platillo->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $platillo->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
