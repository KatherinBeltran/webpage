<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_etc') }}
            {{ Form::text('nombre_etc', $eficiencium->nombre_etc, ['class' => 'form-control' . ($errors->has('nombre_etc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Etc']) }}
            {!! $errors->first('nombre_etc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $eficiencium->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sector') }}
            {{ Form::text('sector', $eficiencium->sector, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
            {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aprobado') }}
            {{ Form::text('aprobado', $eficiencium->aprobado, ['class' => 'form-control' . ($errors->has('aprobado') ? ' is-invalid' : ''), 'placeholder' => 'Aprobado']) }}
            {!! $errors->first('aprobado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desertor') }}
            {{ Form::text('desertor', $eficiencium->desertor, ['class' => 'form-control' . ($errors->has('desertor') ? ' is-invalid' : ''), 'placeholder' => 'Desertor']) }}
            {!! $errors->first('desertor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reprobado') }}
            {{ Form::text('reprobado', $eficiencium->reprobado, ['class' => 'form-control' . ($errors->has('reprobado') ? ' is-invalid' : ''), 'placeholder' => 'Reprobado']) }}
            {!! $errors->first('reprobado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('eficiencia.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>