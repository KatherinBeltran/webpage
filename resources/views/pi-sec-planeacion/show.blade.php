@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver registro</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('pi-sec-planeacions.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                    <div class="form-group">
                            <strong>Indicador De Bienestar:</strong>
                            {{ $pi->indicador_de_bienestar }}
                        </div>
                        <div class="form-group">
                            <strong>Consecutivo De La Meta:</strong>
                            {{ $pi->consecutivo_de_la_meta }}
                        </div>
                        <div class="form-group">
                            <strong>Meta:</strong>
                            {{ $pi->meta }}
                        </div>
                        <div class="form-group">
                            <strong>Entidad Responsable:</strong>
                            {{ $pi->entidad_responsable }}
                        </div>
                        <div class="form-group">
                            <strong>Indicador:</strong>
                            {{ $pi->indicador }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Meta:</strong>
                            {{ $pi->tipo_de_meta }}
                        </div>
                        <div class="form-group">
                            <strong>Total Compromisos 2023:</strong>
                            {{ $pi->total_compromisos_2023 }}
                        </div>
                        <div class="form-group">
                            <strong>Total Obligaciones:</strong>
                            {{ $pi->total_obligaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Eficiencia 2023 Avance Financiero 2023:</strong>
                            {{ $pi->eficiencia_2023_avance_financiero_2023 }}
                        </div>
                        <div class="form-group">
                            <strong>Efectividad 2023:</strong>
                            {{ $pi->efectividad_2023 }}
                        </div>
                        <div class="form-group">
                            <strong>Eficiencia Acumulada Avance Fisico:</strong>
                            {{ $pi->eficiencia_acumulada_avance_fisico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop