@extends('layouts.app')

@section('template_title')
    {{ $reservacione->name ?? "{{ __('Show') Reservacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $reservacione->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Mesa:</strong>
                            {{ $reservacione->id_mesa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $reservacione->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Num Personas:</strong>
                            {{ $reservacione->num_personas }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $reservacione->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Time Estimado:</strong>
                            {{ $reservacione->time_estimado }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $reservacione->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
