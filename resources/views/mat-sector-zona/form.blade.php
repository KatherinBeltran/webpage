<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('entidad') }}
            {{ Form::text('entidad', $matSectorZona->entidad, ['class' => 'form-control' . ($errors->has('entidad') ? ' is-invalid' : ''), 'placeholder' => 'Entidad']) }}
            {!! $errors->first('entidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grado') }}
            {{ Form::text('grado', $matSectorZona->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $matSectorZona->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sector') }}
            {{ Form::text('sector', $matSectorZona->sector, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
            {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('urbano') }}
            {{ Form::text('urbano', $matSectorZona->urbano, ['class' => 'form-control' . ($errors->has('urbano') ? ' is-invalid' : ''), 'placeholder' => 'Urbano']) }}
            {!! $errors->first('urbano', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rural') }}
            {{ Form::text('rural', $matSectorZona->rural, ['class' => 'form-control' . ($errors->has('rural') ? ' is-invalid' : ''), 'placeholder' => 'Rural']) }}
            {!! $errors->first('rural', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('mat-sector-zonas.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>