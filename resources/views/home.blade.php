@extends('adminlte::page')

@section('title', 'Home')

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                <h4>Secretaria de </h4>
                <h3>Salud</h3>
            </div>
            <div class="icon">
                <i class="fas fa-stethoscope"></i>
            </div>
            <a href="afivac-dash" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">
                <h4>Secretaria de </h4>
                <h3>Educación</h3>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="mat-dash" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
            <div class="inner">
                <h4>Secretaria de </h4>
                <h3>Movilidad</h3>
            </div>
            <div class="icon">
                <i class="fas fa-car"></i>
            </div>
            <a href="pi-sec-movilidad-dash" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
            <div class="inner">
                <h4>Secretaria de </h4>
                <h3>Hacienda</h3>
            </div>
            <div class="icon">
                <i class="fas fa-home"></i>
            </div>
            <a href="pi-sec-hacienda-dash" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
                            <div class="row">
                                        <div class="col-lg-7 mx-auto" id="additionalText">
                                            <canvas id="barChart" width="800" height="400"></canvas>
                                        </div>

                            </div>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
$(document).ready(function () {
    $('.nav-tabs a').on('click', function (e) {
        // Oculta el texto cuando se hace clic en una pestaña
        $('#additionalText').addClass('d-none');
    });
});
</script>

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{   $totalCompromisos}};
        var totalObligaciones = {{  $totalCompromisos1}};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos ', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación',
                    data: [totalCompromisos, totalObligaciones],
                    backgroundColor: ['#f7dc6f', '#f7dc6f'], // Personaliza los colores de las barras
                    borderWidth: 0
                }]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        maxBarThickness: 50 // Ajusta el grosor máximo de las barras
                    }
                }
            }
        });
    </script>
    <script> console.log('Hi!'); </script>
@stop