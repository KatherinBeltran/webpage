@extends('layouts.app')

@section('template_title')
    {{ $pae->name ?? "{{ __('Show') Pae" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pae</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('paes.index') }}"> {{ __('Back') }}</a>
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
@endsection