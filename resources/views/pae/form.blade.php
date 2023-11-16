<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('institucion') }}
            {{ Form::text('institucion', $pae->institucion, ['class' => 'form-control' . ($errors->has('institucion') ? ' is-invalid' : ''), 'placeholder' => 'Institucion']) }}
            {!! $errors->first('institucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sede') }}
            {{ Form::text('sede', $pae->sede, ['class' => 'form-control' . ($errors->has('sede') ? ' is-invalid' : ''), 'placeholder' => 'Sede']) }}
            {!! $errors->first('sede', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mes') }}
            {{ Form::text('mes', $pae->mes, ['class' => 'form-control' . ($errors->has('mes') ? ' is-invalid' : ''), 'placeholder' => 'Mes']) }}
            {!! $errors->first('mes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('registro') }}
            {{ Form::text('registro', $pae->registro, ['class' => 'form-control' . ($errors->has('registro') ? ' is-invalid' : ''), 'placeholder' => 'Registro']) }}
            {!! $errors->first('registro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('paes.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>