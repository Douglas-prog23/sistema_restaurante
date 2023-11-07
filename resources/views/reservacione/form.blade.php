<?php
$roles = [
    1 => 'Administrador',
    2 => 'Empleado',
    3 => 'Cliente',
];
?>
<div class="box box-info padding-1">
    <div class="form-group">
        {{ Form::label('id_cliente', 'Cliente') }}
        {{ Form::select('id_cliente', $users->pluck('name', 'id'), $reservacione->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un cliente']) }}
        {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        {{ Form::label('num_personas') }}
        {{ Form::select(
            'num_personas',
            ['1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10',],
            $reservacione->num_personas,
            ['class' => 'form-control' . ($errors->has('num_personas') ? ' is-invalid' : ''),],) }}
        {!! $errors->first('num_personas', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('ocasion', 'Ocasión') }}
        {{ Form::select(
            'ocasion',
            [
                'Cumpleaños' => 'Cumpleaños',
                'Aniversario' => 'Aniversario',
                'Reunión' => 'Reunión',
                'Otra Ocasión' => 'Otra Ocasión',
                'Celebración Especial' => 'Celebración Especial',
                'Evento Familiar' => 'Evento Familiar',
            ],
            $reservacione->ocasion,
            [
                'class' => 'form-control' . ($errors->has('ocasion') ? ' is-invalid' : ''),
                'placeholder' => 'Selecciona una ocasión',
            ],
        ) }}
        {!! $errors->first('ocasion', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        {{ Form::label('id_mesa', 'Mesa') }}
        {{ Form::select(
            'id_mesa',
            $mesas->pluck('num_mesa', 'id')->map(function ($item, $key) use ($mesas) {
                $mesa = $mesas->where('id', $key)->first();
                return "Mesa $item max({$mesa->capacidad_max})";
            }),
            $reservacione->id_mesa,
            [
                'class' => 'form-control' . ($errors->has('id_mesa') ? ' is-invalid' : ''),
                'placeholder' => 'Selecciona una mesa',
            ],
        ) }}
        {!! $errors->first('id_mesa', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        {{ Form::label('fecha') }}
        {{ Form::input('date', 'fecha', date('Y-m-d'), ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha', 'min' => date('Y-m-d')]) }}
        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('comentario') }}
        {{ Form::text('comentario', $reservacione->comentario, ['class' => 'form-control' . ($errors->has('comentario') ? ' is-invalid' : ''), 'placeholder' => 'Comentario']) }}
        {!! $errors->first('comentario', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('hora') }}
        {{ Form::time('hora', $reservacione->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : '')]) }}
        {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('estado') }}
        {{ Form::select('estado', ['Pendiente' => 'Pendiente', 'Reservada' => 'Reservada', 'Cancelada' => 'Cancelada'], $reservacione->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
    </div>

</div>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Finalizar') }}</button>
</div>
</div>
