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
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('paes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Institucion:</strong>
                            {{ $pae->institucion }}
                        </div>
                        <div class="form-group">
                            <strong>Sede:</strong>
                            {{ $pae->sede }}
                        </div>
                        <div class="form-group">
                            <strong>Mes:</strong>
                            {{ $pae->mes }}
                        </div>
                        <div class="form-group">
                            <strong>Registro:</strong>
                            {{ $pae->registro }}
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