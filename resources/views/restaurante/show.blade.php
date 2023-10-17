@extends('layouts.app')

@section('template_title')
    {{ $restaurante->name ?? "{{ __('Show') Restaurante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Restaurante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('restaurantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $restaurante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Restaurante:</strong>
                            {{ $restaurante->cod_restaurante }}
                        </div>
                        <div class="form-group">
                            <strong>Slogan:</strong>
                            {{ $restaurante->slogan }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $restaurante->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $restaurante->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $restaurante->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
