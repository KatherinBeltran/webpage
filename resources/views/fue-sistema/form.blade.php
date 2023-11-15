<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('entidad') }}
            {{ Form::text('entidad', $fueSistema->entidad, ['class' => 'form-control' . ($errors->has('entidad') ? ' is-invalid' : ''), 'placeholder' => 'Entidad']) }}
            {!! $errors->first('entidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sector') }}
            {{ Form::text('sector', $fueSistema->sector, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
            {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $fueSistema->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desercion') }}
            {{ Form::text('desercion', $fueSistema->desercion, ['class' => 'form-control' . ($errors->has('desercion') ? ' is-invalid' : ''), 'placeholder' => 'Desercion']) }}
            {!! $errors->first('desercion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('fue-sistemas.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>