@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista metas secretaría de movilidad</h1>

    <div class="float-right">
        <a href="{{ route('pi-sec-movilidads.create') }}" class="btn btn-block btn-outline-secondary btn-sm float-right"  data-placement="left">
            {{ __('Nuevo') }}
        </a>
    </div>
    <div class="row">
        <div class="col-md-7,1">
            @if (session('success'))
                {!! session('success') !!}
            @endif

            @if (session('error'))
                {!! session('error') !!}
            @endif
        </div>
    </div>
@stop

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead">
            <tr>
                <th>No</th>
                                            
                <th>Indicador De Bienestar</th>
                <th>Consecutivo De La Meta</th>
                <th>Meta</th>
                <th>Entidad Responsable</th>
                <th>Indicador</th>
                <th>Tipo De Meta</th>
                <th>Total Compromisos 2023</th>
                <th>Total Obligaciones</th>
                <th>Eficiencia 2023 Avance Financiero 2023</th>
                <th>Efectividad 2023</th>
                <th>Eficiencia Acumulada Avance Fisico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pis as $pi)
                <tr>
                    <td>{{ ++$i }}</td>
                    
                    <td>{{ $pi->indicador_de_bienestar }}</td>
                    <td>{{ $pi->consecutivo_de_la_meta }}</td>
                    <td>{{ $pi->meta }}</td>
                    <td>{{ $pi->entidad_responsable }}</td>
                    <td>{{ $pi->indicador }}</td>
                    <td>{{ $pi->tipo_de_meta }}</td>
                    <td>{{ $pi->total_compromisos_2023 }}</td>
                    <td>{{ $pi->total_obligaciones }}</td>
                    <td>{{ $pi->eficiencia_2023_avance_financiero_2023 }}</td>
                    <td>{{ $pi->efectividad_2023 }}</td>
                    <td>{{ $pi->eficiencia_acumulada_avance_fisico }}</td>

                    <td>
                        <form action="{{ route('pi-sec-movilidads.destroy',$pi->id) }}" method="POST">
                            <a class="btn btn-sm btn-secundary" href="{{ route('pi-sec-movilidads.show',$pi->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-secundary" href="{{ route('pi-sec-movilidads.edit',$pi->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secundary btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">

    <style>
    #example_wrapper .paginate_button.page-item.active > a.page-link {
    background-color: lightgray !important;
    color: black !important;
    border-color: gray !important;
    }
    </style>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
    $('#example').DataTable({
        responsive: true,
        language: {
            url: "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Carga el archivo de idioma en español
        }
    });
    });
    </script>
@stop