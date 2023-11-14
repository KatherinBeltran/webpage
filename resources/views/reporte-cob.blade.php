@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte cobertura</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="lineChartBruta" width="800" height="400"></canvas>
                    <canvas id="barChartBruta" width="800" height="400"></canvas>
                </section>

                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="lineChartNeta" width="800" height="400"></canvas>
                    <canvas id="barChartNeta" width="800" height="400"></canvas>
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
        // Obtén los datos desde PHP
        var chartDataBruta = {!! $chartDataBruta !!};

        // Prepara los datos para Chart.js
        var years = chartDataBruta.map(data => data.año);
        var promedios = chartDataBruta.map(data => data.promedio * 100); // Multiplica por 100 para convertir a porcentaje

        // Crea el gráfico de líneas
        var ctx = document.getElementById('lineChartBruta').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: years,
                datasets: [{
                    label: 'Promedio de Cobertura Bruta (%)', // Ajusta la etiqueta
                    data: promedios,
                    backgroundColor: 'rgba(192, 57, 43)',
                    borderColor: 'rgba(192, 57, 43)',
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
                            text: 'Promedio de Cobertura Bruta (%)' // Ajusta la etiqueta
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Tendencia del Promedio de Cobertura Bruta a lo largo de los Años',
                    }
                }
            }
        });
    </script>

    <script>
        // Obtén los datos desde PHP
        var barchartDataBruta = {!! json_encode($datosBruta) !!};

        // Prepara los datos para Chart.js y multiplica por 100 para convertir a porcentaje
        var labels = ['Transición', 'Primaria', 'Secundaria', 'Media', 'Básica'];
        var valoresAñoAnterior = barchartDataBruta[1];
        var valoresAñoActual = barchartDataBruta[0];

        // Multiplica por 100 para convertir a porcentaje
        var datosAñoAnterior = [
            valoresAñoAnterior.cobertura_bruta_transicion * 100,
            valoresAñoAnterior.cobertura_bruta_primaria * 100,
            valoresAñoAnterior.cobertura_bruta_secundaria * 100,
            valoresAñoAnterior.cobertura_bruta_media * 100,
            valoresAñoAnterior.cobertura_bruta_basica * 100
        ];

        // Multiplica por 100 para convertir a porcentaje
        var datosAñoActual = [
            valoresAñoActual.cobertura_bruta_transicion * 100,
            valoresAñoActual.cobertura_bruta_primaria * 100,
            valoresAñoActual.cobertura_bruta_secundaria * 100,
            valoresAñoActual.cobertura_bruta_media * 100,
            valoresAñoActual.cobertura_bruta_basica * 100
        ];

        // Crea el gráfico de columnas agrupadas
        var ctx = document.getElementById('barChartBruta').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: valoresAñoAnterior.año,
                        backgroundColor: 'rgba(214, 84.5, 71)',
                        borderColor: 'rgba(214, 84.5, 71)',
                        borderWidth: 1,
                        data: datosAñoAnterior
                    },
                    {
                        label: valoresAñoActual.año,
                        backgroundColor: 'rgba(245, 183, 177)',
                        borderColor: 'rgba(245, 183, 177)',
                        borderWidth: 1,
                        data: datosAñoActual
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Niveles educativos'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Cobertura bruta (%)'
                        },
                        stacked: false,
                        beginAtZero: true,
                        callback: function(value) {
                            return value + "%";
                        }
                    }
                },
                barGroup: {
                    categoryPercentage: 0.8,
                    barPercentage: 0.4
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Comparación de Cobertura Bruta en Diferentes Niveles Educativos en los Últimos Dos Años',
                    }
                }
            }
        });
    </script>

    <script>
        // Obtén los datos desde PHP
        var chartDataNeta = {!! $chartDataNeta !!};

        // Prepara los datos para Chart.js
        var years = chartDataNeta.map(data => data.año);
        var promedios = chartDataNeta.map(data => data.promedio * 100); // Multiplica por 100 para convertir a porcentaje

        // Crea el gráfico de líneas
        var ctx = document.getElementById('lineChartNeta').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: years,
                datasets: [{
                    label: 'Promedio de Cobertura Neta (%)', // Ajusta la etiqueta
                    data: promedios,
                    backgroundColor: 'rgba(192, 57, 43)',
                    borderColor: 'rgba(192, 57, 43)',
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
                            text: 'Promedio de Cobertura Neta (%)' // Ajusta la etiqueta
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Tendencia Anual del Promedio de Cobertura Neta (%)',
                    }
                }
            }
        });
    </script>

    <script>
        // Obtén los datos desde PHP
        var barchartDataNeta = {!! json_encode($datosNeta) !!};

        // Prepara los datos para Chart.js y multiplica por 100 para convertir a porcentaje
        var labels = ['Transición', 'Primaria', 'Secundaria', 'Media', 'Básica'];
        var valoresAñoAnterior = barchartDataNeta[1];
        var valoresAñoActual = barchartDataNeta[0];

        // Multiplica por 100 para convertir a porcentaje
        var datosAñoAnterior = [
            valoresAñoAnterior.cobertura_neta_transicion * 100,
            valoresAñoAnterior.cobertura_neta_primaria * 100,
            valoresAñoAnterior.cobertura_neta_secundaria * 100,
            valoresAñoAnterior.cobertura_neta_media * 100,
            valoresAñoAnterior.cobertura_neta_basica * 100
        ];

        // Multiplica por 100 para convertir a porcentaje
        var datosAñoActual = [
            valoresAñoActual.cobertura_neta_transicion * 100,
            valoresAñoActual.cobertura_neta_primaria * 100,
            valoresAñoActual.cobertura_neta_secundaria * 100,
            valoresAñoActual.cobertura_neta_media * 100,
            valoresAñoActual.cobertura_neta_basica * 100
        ];

        // Crea el gráfico de columnas agrupadas
        var ctx = document.getElementById('barChartNeta').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: valoresAñoAnterior.año,
                        backgroundColor: 'rgba(214, 84.5, 71)',
                        borderColor: 'rgba(214, 84.5, 71)',
                        borderWidth: 1,
                        data: datosAñoAnterior
                    },
                    {
                        label: valoresAñoActual.año,
                        backgroundColor: 'rgba(245, 183, 177)',
                        borderColor: 'rgba(245, 183, 177)',
                        borderWidth: 1,
                        data: datosAñoActual
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Niveles educativos'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Cobertura neta (%)'
                        },
                        stacked: false,
                        beginAtZero: true,
                        callback: function(value) {
                            return value + "%";
                        }
                    }
                },
                barGroup: {
                    categoryPercentage: 0.8,
                    barPercentage: 0.4
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Comparación de Cobertura Neta en Niveles Educativos en los Últimos Dos Años',
                    }
                }
            }
        });
    </script>
@stop