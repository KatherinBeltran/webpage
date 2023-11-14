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
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('cob-neta.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Etc:</strong>
                            {{ $cobNetum->nombre_etc }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $cobNetum->año }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Neta Transicion:</strong>
                            {{ $cobNetum->cobertura_neta_transicion }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Neta Primaria:</strong>
                            {{ $cobNetum->cobertura_neta_primaria }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Neta Secundaria:</strong>
                            {{ $cobNetum->cobertura_neta_secundaria }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Neta Media:</strong>
                            {{ $cobNetum->cobertura_neta_media }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Neta Basica:</strong>
                            {{ $cobNetum->cobertura_neta_basica }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Neta:</strong>
                            {{ $cobNetum->cobertura_neta }}
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