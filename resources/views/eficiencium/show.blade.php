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
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('eficiencia.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Etc:</strong>
                            {{ $eficiencium->nombre_etc }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $eficiencium->año }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $eficiencium->sector }}
                        </div>
                        <div class="form-group">
                            <strong>Aprobado:</strong>
                            {{ $eficiencium->aprobado }}
                        </div>
                        <div class="form-group">
                            <strong>Desertor:</strong>
                            {{ $eficiencium->desertor }}
                        </div>
                        <div class="form-group">
                            <strong>Reprobado:</strong>
                            {{ $eficiencium->reprobado }}
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