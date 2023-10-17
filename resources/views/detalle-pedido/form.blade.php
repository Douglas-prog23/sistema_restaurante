<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pedido') }}
            {{ Form::text('id_pedido', $detallePedido->id_pedido, ['class' => 'form-control' . ($errors->has('id_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Id Pedido']) }}
            {!! $errors->first('id_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_platillo') }}
            {{ Form::text('id_platillo', $detallePedido->id_platillo, ['class' => 'form-control' . ($errors->has('id_platillo') ? ' is-invalid' : ''), 'placeholder' => 'Id Platillo']) }}
            {!! $errors->first('id_platillo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $detallePedido->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $detallePedido->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>