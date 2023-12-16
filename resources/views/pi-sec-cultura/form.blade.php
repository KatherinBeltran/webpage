<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('indicador_de_bienestar') }}
            {{ Form::text('indicador_de_bienestar', $pi->indicador_de_bienestar, ['class' => 'form-control' . ($errors->has('indicador_de_bienestar') ? ' is-invalid' : ''), 'placeholder' => 'Indicador De Bienestar']) }}
            {!! $errors->first('indicador_de_bienestar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consecutivo_de_la_meta') }}
            {{ Form::text('consecutivo_de_la_meta', $pi->consecutivo_de_la_meta, ['class' => 'form-control' . ($errors->has('consecutivo_de_la_meta') ? ' is-invalid' : ''), 'placeholder' => 'Consecutivo De La Meta']) }}
            {!! $errors->first('consecutivo_de_la_meta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('meta') }}
            {{ Form::text('meta', $pi->meta, ['class' => 'form-control' . ($errors->has('meta') ? ' is-invalid' : ''), 'placeholder' => 'Meta']) }}
            {!! $errors->first('meta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entidad_responsable') }}
            {{ Form::text('entidad_responsable', $pi->entidad_responsable, ['class' => 'form-control' . ($errors->has('entidad_responsable') ? ' is-invalid' : ''), 'placeholder' => 'Entidad Responsable']) }}
            {!! $errors->first('entidad_responsable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('indicador') }}
            {{ Form::text('indicador', $pi->indicador, ['class' => 'form-control' . ($errors->has('indicador') ? ' is-invalid' : ''), 'placeholder' => 'Indicador']) }}
            {!! $errors->first('indicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_de_meta') }}
            {{ Form::text('tipo_de_meta', $pi->tipo_de_meta, ['class' => 'form-control' . ($errors->has('tipo_de_meta') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Meta']) }}
            {!! $errors->first('tipo_de_meta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_compromisos_2023') }}
            {{ Form::text('total_compromisos_2023', $pi->total_compromisos_2023, ['class' => 'form-control' . ($errors->has('total_compromisos_2023') ? ' is-invalid' : ''), 'placeholder' => 'Total Compromisos 2023']) }}
            {!! $errors->first('total_compromisos_2023', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_obligaciones') }}
            {{ Form::text('total_obligaciones', $pi->total_obligaciones, ['class' => 'form-control' . ($errors->has('total_obligaciones') ? ' is-invalid' : ''), 'placeholder' => 'Total Obligaciones']) }}
            {!! $errors->first('total_obligaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eficiencia_2023_avance_financiero_2023') }}
            {{ Form::text('eficiencia_2023_avance_financiero_2023', $pi->eficiencia_2023_avance_financiero_2023, ['class' => 'form-control' . ($errors->has('eficiencia_2023_avance_financiero_2023') ? ' is-invalid' : ''), 'placeholder' => 'Eficiencia 2023 Avance Financiero 2023']) }}
            {!! $errors->first('eficiencia_2023_avance_financiero_2023', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('efectividad_2023') }}
            {{ Form::text('efectividad_2023', $pi->efectividad_2023, ['class' => 'form-control' . ($errors->has('efectividad_2023') ? ' is-invalid' : ''), 'placeholder' => 'Efectividad 2023']) }}
            {!! $errors->first('efectividad_2023', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eficiencia_acumulada_avance_fisico') }}
            {{ Form::text('eficiencia_acumulada_avance_fisico', $pi->eficiencia_acumulada_avance_fisico, ['class' => 'form-control' . ($errors->has('eficiencia_acumulada_avance_fisico') ? ' is-invalid' : ''), 'placeholder' => 'Eficiencia Acumulada Avance Fisico']) }}
            {!! $errors->first('eficiencia_acumulada_avance_fisico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('pi-sec-culturas.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>