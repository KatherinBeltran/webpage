<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_etc') }}
            {{ Form::text('nombre_etc', $cobBrutum->nombre_etc, ['class' => 'form-control' . ($errors->has('nombre_etc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Etc']) }}
            {!! $errors->first('nombre_etc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $cobBrutum->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_bruta_transicion') }}
            {{ Form::text('cobertura_bruta_transicion', $cobBrutum->cobertura_bruta_transicion, ['class' => 'form-control' . ($errors->has('cobertura_bruta_transicion') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Bruta Transicion']) }}
            {!! $errors->first('cobertura_bruta_transicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_bruta_primaria') }}
            {{ Form::text('cobertura_bruta_primaria', $cobBrutum->cobertura_bruta_primaria, ['class' => 'form-control' . ($errors->has('cobertura_bruta_primaria') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Bruta Primaria']) }}
            {!! $errors->first('cobertura_bruta_primaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_bruta_secundaria') }}
            {{ Form::text('cobertura_bruta_secundaria', $cobBrutum->cobertura_bruta_secundaria, ['class' => 'form-control' . ($errors->has('cobertura_bruta_secundaria') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Bruta Secundaria']) }}
            {!! $errors->first('cobertura_bruta_secundaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_bruta_media') }}
            {{ Form::text('cobertura_bruta_media', $cobBrutum->cobertura_bruta_media, ['class' => 'form-control' . ($errors->has('cobertura_bruta_media') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Bruta Media']) }}
            {!! $errors->first('cobertura_bruta_media', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_bruta_basica') }}
            {{ Form::text('cobertura_bruta_basica', $cobBrutum->cobertura_bruta_basica, ['class' => 'form-control' . ($errors->has('cobertura_bruta_basica') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Bruta Basica']) }}
            {!! $errors->first('cobertura_bruta_basica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_bruta') }}
            {{ Form::text('cobertura_bruta', $cobBrutum->cobertura_bruta, ['class' => 'form-control' . ($errors->has('cobertura_bruta') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Bruta']) }}
            {!! $errors->first('cobertura_bruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('cob-bruta.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>