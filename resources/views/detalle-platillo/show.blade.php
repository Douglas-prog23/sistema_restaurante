@extends('layouts.app')

@section('template_title')
    {{ $detallePlatillo->name ?? "{{ __('Show') Detalle Platillo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Platillo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-platillos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Platillo:</strong>
                            {{ $detallePlatillo->id_platillo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ingrediente:</strong>
                            {{ $detallePlatillo->id_ingrediente }}
                        </div>
                        <div class="form-group">
                            <strong>Mano Obra:</strong>
                            {{ $detallePlatillo->mano_obra }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $detallePlatillo->total }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $detallePlatillo->precio_venta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
