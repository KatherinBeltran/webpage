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
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('mat-sector-zonas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Entidad:</strong>
                            {{ $matSectorZona->entidad }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $matSectorZona->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $matSectorZona->año }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $matSectorZona->sector }}
                        </div>
                        <div class="form-group">
                            <strong>Urbano:</strong>
                            {{ $matSectorZona->urbano }}
                        </div>
                        <div class="form-group">
                            <strong>Rural:</strong>
                            {{ $matSectorZona->rural }}
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