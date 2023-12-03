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
                    <canvas id="lineChartDesercion1"></canvas>
                </section>
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="desercionChart" width="800" height="400"></canvas>
                    <canvas id="desercionPorSectorChart" width="800" height="400"></canvas>
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
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor: 'rgba(0, 0, 255, 0.8)',
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
                        backgroundColor: 'rgba(234, 190, 63)',
                    },
                    {
                        label: 'Primaria',
                        data: datosPrimaria,
                        backgroundColor: 'rgba(0, 143, 57, 0.8)',
                    },
                    {
                        label: 'Secundaria',
                        data: datosSecundaria,
                        backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    },
                    {
                        label: 'Media',
                        data: datosMedia,
                        backgroundColor: 'rgba(234, 190, 63, 0.4)',
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

        //Tercer gráfico (lineas)
        // Obtén los datos desde PHP
        var chartDataDiferencia = {!! json_encode($chartDataDiferencia) !!};

        // Prepara los datos para Chart.js
        var yearsDiferencia = chartDataDiferencia.map(data => data.año);
        var diferencias = chartDataDiferencia.map(data => data.diferencia);

        // Crea el gráfico de líneas
        var ctxDiferencia = document.getElementById('lineChartDesercion1').getContext('2d');
        var myLineChartDiferencia = new Chart(ctxDiferencia, {
            type: 'line',
            data: {
                labels: yearsDiferencia,
                datasets: [{
                    label: 'Población por fuera',
                    data: diferencias,
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor: 'rgba(0, 0, 255, 0.8)',
                    borderWidth: 2,
                    fill: false
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
                            text: 'Población por fuera'
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Tendencia de la Población por fuera a lo largo de los Años',
                    }
                }
            }
        });

        //Cuarto gráfico (barras apiladas)
        // Obtén los datos de tu base de datos y organízalos
        var datos = {!! json_encode($datosEficiencia) !!};

        // Define los dos colores para alternar
        var color1 =  'rgba(234, 190, 63)';
        var color2 = 'rgba(0, 143, 57, 0.8)';

        // Organiza los datos para el gráfico
        var labels = [];
        var datasets = {};
        var alternarColor = false; // Variable para alternar entre colores

        datos.forEach(function (dato) {
            // Agrega la etiqueta solo si aún no existe en el array
            if (!labels.includes(dato.año)) {
                labels.push(dato.año);
            }

            // Alterna entre los dos colores
            var color = alternarColor ? color1 : color2;
            alternarColor = !alternarColor;

            // Crea o actualiza el conjunto de datos para cada sector
            if (!datasets[dato.sector]) {
                datasets[dato.sector] = {
                    label: dato.sector,
                    data: [],
                    backgroundColor: color,
                };
            }

            // Agrega el dato solo si es de la etiqueta actual
            datasets[dato.sector].data[labels.indexOf(dato.año)] = dato.desertor * 100;
        });

        // Configura el gráfico
        var ctx = document.getElementById('desercionPorSectorChart').getContext('2d');
        var desercionPorSectorChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: Object.values(datasets),
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Año'
                        },
                        stacked: false,
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Promedio de Deserción (%)'
                        },
                        stacked: false,
                    },
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Índice de Deserción Escolar por Sectores a lo largo de los Años',
                    }
                }
            },
        });
    </script>
@stop