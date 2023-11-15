<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_etc') }}
            {{ Form::text('nombre_etc', $desercion->nombre_etc, ['class' => 'form-control' . ($errors->has('nombre_etc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Etc']) }}
            {!! $errors->first('nombre_etc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $desercion->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desercion_transicion') }}
            {{ Form::text('desercion_transicion', $desercion->desercion_transicion, ['class' => 'form-control' . ($errors->has('desercion_transicion') ? ' is-invalid' : ''), 'placeholder' => 'Desercion Transicion']) }}
            {!! $errors->first('desercion_transicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desercion_primaria') }}
            {{ Form::text('desercion_primaria', $desercion->desercion_primaria, ['class' => 'form-control' . ($errors->has('desercion_primaria') ? ' is-invalid' : ''), 'placeholder' => 'Desercion Primaria']) }}
            {!! $errors->first('desercion_primaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desercion_secundaria') }}
            {{ Form::text('desercion_secundaria', $desercion->desercion_secundaria, ['class' => 'form-control' . ($errors->has('desercion_secundaria') ? ' is-invalid' : ''), 'placeholder' => 'Desercion Secundaria']) }}
            {!! $errors->first('desercion_secundaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desercion_media') }}
            {{ Form::text('desercion_media', $desercion->desercion_media, ['class' => 'form-control' . ($errors->has('desercion_media') ? ' is-invalid' : ''), 'placeholder' => 'Desercion Media']) }}
            {!! $errors->first('desercion_media', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('desercions.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>