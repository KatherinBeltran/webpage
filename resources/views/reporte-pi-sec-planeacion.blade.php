@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Reporte PI</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="tab-scroll">
                            <ul class="nav nav-tabs">
                                @foreach ($consecutivos as $consecutivo)
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#{{ $consecutivo->consecutivo_de_la_meta }}">
                                            {{ $consecutivo->consecutivo_de_la_meta }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content">
                        @foreach ($consecutivos as $consecutivo)
                                <div id="{{ $consecutivo->consecutivo_de_la_meta }}" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                                <h2>{{ $consecutivo->meta }}</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart_{{ $consecutivo->consecutivo_de_la_meta }}" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo->meta }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo->indicador }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                                                <div class="col-lg-12 text-center mb-4" id="additionalText">
                                                    <div class="row">
                                                    <div class="col-lg-4 mx-auto">
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACTUAL</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="velocimetro"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD ACTUAL</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="velocimetro1"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA ACTUAL</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="velocimetro2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 mx-auto" id="additionalText">
                                            <canvas id="barChart1" width="800" height="400"></canvas>
                                        </div>

                            </div>
                        </div>

            </div>
                </div>
            </div>
    </section>
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
        @foreach ($consecutivos as $consecutivo)
            var totalCompromisos_{{ $consecutivo->consecutivo_de_la_meta }} = {{ $consecutivo->total_compromisos_2023 }};
            var totalObligaciones_{{ $consecutivo->consecutivo_de_la_meta }} = {{ $consecutivo->total_obligaciones }};
        @endforeach

        // Inicializa Chart.js
        @foreach ($consecutivos as $consecutivo)
            var ctx_{{ $consecutivo->consecutivo_de_la_meta }} = document.getElementById('barChart_{{ $consecutivo->consecutivo_de_la_meta }}').getContext('2d');
            var myChart_{{ $consecutivo->consecutivo_de_la_meta }} = new Chart(ctx_{{ $consecutivo->consecutivo_de_la_meta }}, {
                type: 'bar',
                data: {
                    labels: ['Total Compromisos {{ $consecutivo->consecutivo_de_la_meta }}', 'Total Obligaciones {{ $consecutivo->consecutivo_de_la_meta }}'],
                    datasets: [{
                        label: 'Comparación Actual',
                        data: [totalCompromisos_{{ $consecutivo->consecutivo_de_la_meta }}, totalObligaciones_{{ $consecutivo->consecutivo_de_la_meta }}],
                        backgroundColor: ['#f7dc6f', '#f7dc6f'],
                        borderWidth: 0
                    }]
                },
                options: {
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            maxBarThickness: 50
                        }
                    }
                }
            });
        @endforeach
    </script>

    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{   $averages['totalCompromisos']}};
        var totalObligaciones = {{  $averages['totalCompromisos1']}};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart1').getContext('2d');
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://d3js.org/d3.v5.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var valorEficiencia = {{ $averages['averageEficiencia'] }};
            var valorMaximo = 100;

            var width = 200;
            var height = 100;

            var svg = d3.select("#velocimetro")
                .append("svg")
                .attr("width", width)
                .attr("height", height);

            // Definir el gradiente de colores
            var gradiente = svg.append("defs")
                .append("linearGradient")
                .attr("id", "gradiente")
                .attr("x1", "0%")
                .attr("y1", "0%")
                .attr("x2", "100%")
                .attr("y2", "0%");

            gradiente.append("stop")
                .attr("offset", "0%")
                .style("stop-color", "red");

            gradiente.append("stop")
                .attr("offset", "50%")
                .style("stop-color", "yellow");

            gradiente.append("stop")
                .attr("offset", "100%")
                .style("stop-color", "green");

            // Calcular el ángulo del indicador
            var anguloIndicador = Math.PI - (valorEficiencia / valorMaximo) * Math.PI; // Invertir el ángulo

            // Dibujar el semicírculo
            var arc = d3.arc()
                .innerRadius(0)
                .outerRadius(height)
                .startAngle(-Math.PI / 2)
                .endAngle(Math.PI / 2);

            svg.append("path")
                .attr("d", arc)
                .attr("transform", "translate(" + width / 2 + "," + height + ")")
                .attr("fill", "url(#gradiente)");

            // Dibujar el indicador
            var indicador = d3.line()
                .x(function (d) { return d[0]; })
                .y(function (d) { return d[1]; });

            var indicadorData = [
                [width / 2, height],
                [width / 2 + height * Math.cos(anguloIndicador), height - height * Math.sin(anguloIndicador)]
            ];

            svg.append("path")
                .data([indicadorData])
                .attr("d", indicador)
                .attr("stroke", "black")
                .attr("stroke-width", 2)
                .attr("fill", "none");

            // Agregar texto del porcentaje
            svg.append("text")
                .attr("x", width / 2 + height * 0.8 * Math.cos(anguloIndicador))
                .attr("y", height - height * 0.8 * Math.sin(anguloIndicador))
                .attr("text-anchor", "middle")
                .style("font-size", "16px")
                .style("fill", "black")
                .text(valorEficiencia + "%");
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var valorEficiencia = {{ $averages['averageEficiencia1'] }};
            var valorMaximo = 100;

            var width = 200;
            var height = 100;

            var svg = d3.select("#velocimetro1")
                .append("svg")
                .attr("width", width)
                .attr("height", height);

            // Definir el gradiente de colores
            var gradiente = svg.append("defs")
                .append("linearGradient")
                .attr("id", "gradiente")
                .attr("x1", "0%")
                .attr("y1", "0%")
                .attr("x2", "100%")
                .attr("y2", "0%");

            gradiente.append("stop")
                .attr("offset", "0%")
                .style("stop-color", "red");

            gradiente.append("stop")
                .attr("offset", "50%")
                .style("stop-color", "yellow");

            gradiente.append("stop")
                .attr("offset", "100%")
                .style("stop-color", "green");

            // Calcular el ángulo del indicador
            var anguloIndicador = Math.PI - (valorEficiencia / valorMaximo) * Math.PI; // Invertir el ángulo

            // Dibujar el semicírculo
            var arc = d3.arc()
                .innerRadius(0)
                .outerRadius(height)
                .startAngle(-Math.PI / 2)
                .endAngle(Math.PI / 2);

            svg.append("path")
                .attr("d", arc)
                .attr("transform", "translate(" + width / 2 + "," + height + ")")
                .attr("fill", "url(#gradiente)");

            // Dibujar el indicador
            var indicador = d3.line()
                .x(function (d) { return d[0]; })
                .y(function (d) { return d[1]; });

            var indicadorData = [
                [width / 2, height],
                [width / 2 + height * Math.cos(anguloIndicador), height - height * Math.sin(anguloIndicador)]
            ];

            svg.append("path")
                .data([indicadorData])
                .attr("d", indicador)
                .attr("stroke", "black")
                .attr("stroke-width", 2)
                .attr("fill", "none");

            // Agregar texto del porcentaje
            svg.append("text")
                .attr("x", width / 2 + height * 0.8 * Math.cos(anguloIndicador))
                .attr("y", height - height * 0.8 * Math.sin(anguloIndicador))
                .attr("text-anchor", "middle")
                .style("font-size", "16px")
                .style("fill", "black")
                .text(valorEficiencia + "%");
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var valorEficiencia = {{ $averages['averageEficiencia2'] }};
            var valorMaximo = 100;

            var width = 200;
            var height = 100;

            var svg = d3.select("#velocimetro2")
                .append("svg")
                .attr("width", width)
                .attr("height", height);

            // Definir el gradiente de colores
            var gradiente = svg.append("defs")
                .append("linearGradient")
                .attr("id", "gradiente")
                .attr("x1", "0%")
                .attr("y1", "0%")
                .attr("x2", "100%")
                .attr("y2", "0%");

            gradiente.append("stop")
                .attr("offset", "0%")
                .style("stop-color", "red");

            gradiente.append("stop")
                .attr("offset", "50%")
                .style("stop-color", "yellow");

            gradiente.append("stop")
                .attr("offset", "100%")
                .style("stop-color", "green");

            // Calcular el ángulo del indicador
            var anguloIndicador = Math.PI - (valorEficiencia / valorMaximo) * Math.PI; // Invertir el ángulo

            // Dibujar el semicírculo
            var arc = d3.arc()
                .innerRadius(0)
                .outerRadius(height)
                .startAngle(-Math.PI / 2)
                .endAngle(Math.PI / 2);

            svg.append("path")
                .attr("d", arc)
                .attr("transform", "translate(" + width / 2 + "," + height + ")")
                .attr("fill", "url(#gradiente)");

            // Dibujar el indicador
            var indicador = d3.line()
                .x(function (d) { return d[0]; })
                .y(function (d) { return d[1]; });

            var indicadorData = [
                [width / 2, height],
                [width / 2 + height * Math.cos(anguloIndicador), height - height * Math.sin(anguloIndicador)]
            ];

            svg.append("path")
                .data([indicadorData])
                .attr("d", indicador)
                .attr("stroke", "black")
                .attr("stroke-width", 2)
                .attr("fill", "none");

            // Agregar texto del porcentaje
            svg.append("text")
                .attr("x", width / 2 + height * 0.8 * Math.cos(anguloIndicador))
                .attr("y", height - height * 0.8 * Math.sin(anguloIndicador))
                .attr("text-anchor", "middle")
                .style("font-size", "16px")
                .style("fill", "black")
                .text(valorEficiencia + "%");
        });
    </script>

    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .tab-scroll {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden; /* Oculta la barra de desplazamiento vertical */
            white-space: nowrap;
        }

        .nav-tabs {
            display: flex;
            flex-wrap: nowrap;
        }
    </style>

    <style>
        .velocimeter {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: conic-gradient(
                var(--color-primary) var(--gradient-start) var(--gradient-end),
                var(--color-secondary) var(--gradient-end) 100%
            );
            margin: 0 auto;
            position: relative;
        }

        .velocimeter::before {
            content: attr(data-value) '%';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
@stop