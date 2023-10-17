<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_platillo') }}
            {{ Form::text('id_platillo', $detallePlatillo->id_platillo, ['class' => 'form-control' . ($errors->has('id_platillo') ? ' is-invalid' : ''), 'placeholder' => 'Id Platillo']) }}
            {!! $errors->first('id_platillo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_ingrediente') }}
            {{ Form::text('id_ingrediente', $detallePlatillo->id_ingrediente, ['class' => 'form-control' . ($errors->has('id_ingrediente') ? ' is-invalid' : ''), 'placeholder' => 'Id Ingrediente']) }}
            {!! $errors->first('id_ingrediente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mano_obra') }}
            {{ Form::text('mano_obra', $detallePlatillo->mano_obra, ['class' => 'form-control' . ($errors->has('mano_obra') ? ' is-invalid' : ''), 'placeholder' => 'Mano Obra']) }}
            {!! $errors->first('mano_obra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $detallePlatillo->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_venta') }}
            {{ Form::text('precio_venta', $detallePlatillo->precio_venta, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
            {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>