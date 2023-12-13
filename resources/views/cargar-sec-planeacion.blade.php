@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Carga masiva</h1>
@stop

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Seleccionar archivo de carga (Excel):</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('cargar-sec-planeacion/importar') }}" method="post" enctype="multipart/form-data" id="form_carga_datos">
                            @csrf
                            <div class="row">
                                <div class="col-lg-10">
                                    <input type="file" name="fileDatos">
                                </div>
                                <div class="col-lg-2">
                                    <button class="btn btn-primary" type="submit" id="btn_cargar">Cargar datos</button>
                                </div>
                            </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <img src="{{ asset('vendor/adminlte/dist/img/loading.gif') }}" id="img_carga" style="display:none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#form_carga_datos').submit(function(e) {
                // Verifica si se ha seleccionado un archivo
                if ($("input[name='fileDatos']").val() === "") {
                    e.preventDefault(); // Detiene el envío del formulario
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Debe seleccionar un archivo (Excel).',
                        showConfirmButton: false,
                        timer: 2500
                    });
                } else {
                    // Verifica la extensión del archivo
                    var fileName = $("input[name='fileDatos']").val();
                    var extension = fileName.split('.').pop().toLowerCase();
                    if (extension !== "xls" && extension !== "xlsx") {
                        e.preventDefault(); // Detiene el envío del formulario
                        Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: 'Debe seleccionar un archivo con extensión .xls o .xlsx.',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    } else {
                        // Muestra el GIF de carga cuando se envía el formulario
                        $('#img_carga').show();
                        $('#btn_cargar').prop('disabled', true); // Deshabilita el botón de carga
                    }
                }
            });
        });
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop