<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('num_mesa') }}
            {{ Form::number('num_mesa', $mesa->num_mesa, ['class' => 'form-control' . ($errors->has('num_mesa') ? ' is-invalid' : ''), 'placeholder' => 'Num Mesa']) }}
            {!! $errors->first('num_mesa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad_max') }}
            {{ Form::number('capacidad_max', $mesa->capacidad_max, ['class' => 'form-control' . ($errors->has('capacidad_max') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad Max']) }}
            {!! $errors->first('capacidad_max', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado', ['Disponible' => 'Disponible', 'Inactiva' => 'Inactiva', 'Mantenimiento' => 'Mantenimiento'], $mesa->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Finalizar') }}</button>
    </div>
</div>