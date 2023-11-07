@extends('layouts.app')

@section('template_title')
    {{ $mesa->name ?? "{{ __('Show') Mesa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mesa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mesas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Num Mesa:</strong>
                            {{ $mesa->num_mesa }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad Max:</strong>
                            {{ $mesa->capacidad_max }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $mesa->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
