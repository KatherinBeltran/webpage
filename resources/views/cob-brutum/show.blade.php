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
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('cob-bruta.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Etc:</strong>
                            {{ $cobBrutum->nombre_etc }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $cobBrutum->año }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Bruta Transicion:</strong>
                            {{ $cobBrutum->cobertura_bruta_transicion }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Bruta Primaria:</strong>
                            {{ $cobBrutum->cobertura_bruta_primaria }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Bruta Secundaria:</strong>
                            {{ $cobBrutum->cobertura_bruta_secundaria }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Bruta Media:</strong>
                            {{ $cobBrutum->cobertura_bruta_media }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Bruta Basica:</strong>
                            {{ $cobBrutum->cobertura_bruta_basica }}
                        </div>
                        <div class="form-group">
                            <strong>Cobertura Bruta:</strong>
                            {{ $cobBrutum->cobertura_bruta }}
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