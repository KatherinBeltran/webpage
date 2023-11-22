<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('indicadores_pts') }}
            {{ Form::text('indicadores_pts', $afiVacunacion->indicadores_pts, ['class' => 'form-control' . ($errors->has('indicadores_pts') ? ' is-invalid' : ''), 'placeholder' => 'Indicadores Pts']) }}
            {!! $errors->first('indicadores_pts', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $afiVacunacion->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numerador') }}
            {{ Form::text('numerador', $afiVacunacion->numerador, ['class' => 'form-control' . ($errors->has('numerador') ? ' is-invalid' : ''), 'placeholder' => 'Numerador']) }}
            {!! $errors->first('numerador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('denominador') }}
            {{ Form::text('denominador', $afiVacunacion->denominador, ['class' => 'form-control' . ($errors->has('denominador') ? ' is-invalid' : ''), 'placeholder' => 'Denominador']) }}
            {!! $errors->first('denominador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('indicador') }}
            {{ Form::text('indicador', $afiVacunacion->indicador, ['class' => 'form-control' . ($errors->has('indicador') ? ' is-invalid' : ''), 'placeholder' => 'Indicador']) }}
            {!! $errors->first('indicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('afi-vacunacions.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>