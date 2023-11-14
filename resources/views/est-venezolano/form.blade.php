<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('entidad') }}
            {{ Form::text('entidad', $estVenezolano->entidad, ['class' => 'form-control' . ($errors->has('entidad') ? ' is-invalid' : ''), 'placeholder' => 'Entidad']) }}
            {!! $errors->first('entidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grado') }}
            {{ Form::text('grado', $estVenezolano->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $estVenezolano->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('oficial') }}
            {{ Form::text('oficial', $estVenezolano->oficial, ['class' => 'form-control' . ($errors->has('oficial') ? ' is-invalid' : ''), 'placeholder' => 'Oficial']) }}
            {!! $errors->first('oficial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contratada') }}
            {{ Form::text('contratada', $estVenezolano->contratada, ['class' => 'form-control' . ($errors->has('contratada') ? ' is-invalid' : ''), 'placeholder' => 'Contratada']) }}
            {!! $errors->first('contratada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('privada') }}
            {{ Form::text('privada', $estVenezolano->privada, ['class' => 'form-control' . ($errors->has('privada') ? ' is-invalid' : ''), 'placeholder' => 'Privada']) }}
            {!! $errors->first('privada', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('est-venezolanos.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>