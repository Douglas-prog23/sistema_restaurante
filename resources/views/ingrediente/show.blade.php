@extends('layouts.app')

@section('template_title')
    {{ $ingrediente->name ?? "{{ __('Show') Ingrediente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ingrediente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingredientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ingrediente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $ingrediente->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $ingrediente->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $ingrediente->stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
