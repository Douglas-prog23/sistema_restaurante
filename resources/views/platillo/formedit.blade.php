<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" enctype="multipart/form-data">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $platillo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('categoria', $categorias, $platillo->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('precio', 'Precio') }}
            {{ Form::number('precio', $platillo->precio, ['step' => '0.01', 'class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio', 'inputmode' => 'numeric']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('estado', 'Estado') }}
            {{ Form::select('estado', ['1' => 'Activo', '0' => 'Inactivo'], $platillo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::number('stock', $platillo->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::file('imagen', ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : '')]) }}
            @if ($platillo->imagen)
                <img src="{{ asset($platillo->imagen) }}" alt="Imagen actual" class="img-thumbnail" width="100">
            @endif
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $platillo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Finalizar') }}</button>
    </div>
</div>