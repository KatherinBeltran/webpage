<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_etc') }}
            {{ Form::text('nombre_etc', $cobNetum->nombre_etc, ['class' => 'form-control' . ($errors->has('nombre_etc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Etc']) }}
            {!! $errors->first('nombre_etc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $cobNetum->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_neta_transicion') }}
            {{ Form::text('cobertura_neta_transicion', $cobNetum->cobertura_neta_transicion, ['class' => 'form-control' . ($errors->has('cobertura_neta_transicion') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Neta Transicion']) }}
            {!! $errors->first('cobertura_neta_transicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_neta_primaria') }}
            {{ Form::text('cobertura_neta_primaria', $cobNetum->cobertura_neta_primaria, ['class' => 'form-control' . ($errors->has('cobertura_neta_primaria') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Neta Primaria']) }}
            {!! $errors->first('cobertura_neta_primaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_neta_secundaria') }}
            {{ Form::text('cobertura_neta_secundaria', $cobNetum->cobertura_neta_secundaria, ['class' => 'form-control' . ($errors->has('cobertura_neta_secundaria') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Neta Secundaria']) }}
            {!! $errors->first('cobertura_neta_secundaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_neta_media') }}
            {{ Form::text('cobertura_neta_media', $cobNetum->cobertura_neta_media, ['class' => 'form-control' . ($errors->has('cobertura_neta_media') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Neta Media']) }}
            {!! $errors->first('cobertura_neta_media', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_neta_basica') }}
            {{ Form::text('cobertura_neta_basica', $cobNetum->cobertura_neta_basica, ['class' => 'form-control' . ($errors->has('cobertura_neta_basica') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Neta Basica']) }}
            {!! $errors->first('cobertura_neta_basica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cobertura_neta') }}
            {{ Form::text('cobertura_neta', $cobNetum->cobertura_neta, ['class' => 'form-control' . ($errors->has('cobertura_neta') ? ' is-invalid' : ''), 'placeholder' => 'Cobertura Neta']) }}
            {!! $errors->first('cobertura_neta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('cob-neta.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>