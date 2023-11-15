@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte tasa de deserción</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="lineChartDesercion"></canvas>
                </section>
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="desercionChart" width="800" height="400"></canvas>
                </section>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Primer gráfico (lineas)
        // Obtén los datos desde PHP
        var chartDataDesercion = {!! json_encode($chartDataDesercion) !!};

        // Prepara los datos para Chart.js
        var years = chartDataDesercion.map(data => data.año);
        var promedios = chartDataDesercion.map(data => data.promedio * 100);

        // Crea el gráfico de líneas
        var ctx = document.getElementById('lineChartDesercion').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: years,
                datasets: [{
                    label: 'Promedio de Deserción (%)',
                    data: promedios,
                    backgroundColor: 'rgba(192, 57, 43)', // Elimina esta línea si deseas quitar completamente el área sombreada
                    borderColor: 'rgba(192, 57, 43)',
                    borderWidth: 2,
                    fill: false // Cambia a false para quitar el área sombreada
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Año'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Promedio de Deserción (%)'
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Tendencia del Promedio de Deserción a lo largo de los Años',
                    }
                }
            }
        });

        // Segundo gráfico (barras apiladas)
        // Obtén los datos de tu base de datos y organízalos
        var datos = <?php echo json_encode($datosDesercion); ?>;

        // Organiza los datos para el gráfico
        var labels = [];
        var datosTransicion = [];
        var datosPrimaria = [];
        var datosSecundaria = [];
        var datosMedia = [];

        datos.forEach(function (dato) {
            labels.push(dato.año);
            datosTransicion.push(dato.desercion_transicion * 100);
            datosPrimaria.push(dato.desercion_primaria * 100);
            datosSecundaria.push(dato.desercion_secundaria * 100);
            datosMedia.push(dato.desercion_media * 100);
        });

        // Configura el gráfico
        var ctx = document.getElementById('desercionChart').getContext('2d');
        var desercionChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Transición',
                        data: datosTransicion,
                        backgroundColor: 'rgba(192, 57, 43)',
                    },
                    {
                        label: 'Primaria',
                        data: datosPrimaria,
                        backgroundColor: 'rgba(214, 84.5, 71)',
                    },
                    {
                        label: 'Secundaria',
                        data: datosSecundaria,
                        backgroundColor: 'rgba(236, 112, 99)',
                    },
                    {
                        label: 'Media',
                        data: datosMedia,
                        backgroundColor: 'rgba(245, 183, 177)',
                    },
                ],
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Año'
                        },
                        stacked: true,
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Promedio de Deserción (%)'
                        },
                        stacked: true,
                    },
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Índice de Deserción Escolar por Niveles Educativos a lo largo de los Años',
                    }
                }
            },
        });
    </script>
@stop