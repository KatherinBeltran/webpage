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
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('desercions.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Etc:</strong>
                            {{ $desercion->nombre_etc }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $desercion->año }}
                        </div>
                        <div class="form-group">
                            <strong>Desercion Transicion:</strong>
                            {{ $desercion->desercion_transicion }}
                        </div>
                        <div class="form-group">
                            <strong>Desercion Primaria:</strong>
                            {{ $desercion->desercion_primaria }}
                        </div>
                        <div class="form-group">
                            <strong>Desercion Secundaria:</strong>
                            {{ $desercion->desercion_secundaria }}
                        </div>
                        <div class="form-group">
                            <strong>Desercion Media:</strong>
                            {{ $desercion->desercion_media }}
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