@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte PAE</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <canvas id="barChartInstituciones"></canvas>
            </div>
            <div class="row">
                <canvas id="barChartSedes"></canvas>
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
        var dataInstituciones = @json($dataInstituciones);
        var dataSedes = @json($dataSedes);

        // Colores específicos para las barras
        var barColors = [
            'rgba(192, 57, 43)',
            'rgba(214, 84.5, 71)',
            'rgba(236, 112, 99)',
            'rgba(255, 179, 51)',
        ];

        // Organizar datos para el gráfico de instituciones
        var labelsInstituciones = [];
        var datasetsInstituciones = [];

        // Organizar datos para el gráfico de sedes
        var labelsSedes = [];
        var datasetsSedes = [];

        dataInstituciones.forEach(function (item, index) {
        // Gráfico de Instituciones
        if (!labelsInstituciones.includes(item.institucion)) {
            labelsInstituciones.push(item.institucion);
        }

        var datasetIndexInstituciones = datasetsInstituciones.findIndex(ds => ds.label === item.mes);

        if (datasetIndexInstituciones === -1) {
            datasetsInstituciones.push({
                label: item.mes,
                data: Array(labelsInstituciones.length).fill(0),
                backgroundColor: barColors[index % barColors.length],
            });

            datasetIndexInstituciones = datasetsInstituciones.length - 1;
        }

        var labelIndexInstituciones = labelsInstituciones.indexOf(item.institucion);
        datasetsInstituciones[datasetIndexInstituciones].data[labelIndexInstituciones] = item.total;
    });

    dataSedes.forEach(function (item, index) {
        // Gráfico de Sedes
        if (!labelsSedes.includes(item.sede)) {
            labelsSedes.push(item.sede);
        }

        var datasetIndexSedes = datasetsSedes.findIndex(ds => ds.label === item.mes);

        if (datasetIndexSedes === -1) {
            datasetsSedes.push({
                label: item.mes,
                data: Array(labelsSedes.length).fill(0),
                backgroundColor: barColors[index % barColors.length],
            });

            datasetIndexSedes = datasetsSedes.length - 1;
        }

        var labelIndexSedes = labelsSedes.indexOf(item.sede);
        datasetsSedes[datasetIndexSedes].data[labelIndexSedes] = item.total;
    });

        var ctxInstituciones = document.getElementById('barChartInstituciones').getContext('2d');
        var ctxSedes = document.getElementById('barChartSedes').getContext('2d');

        var barChartInstituciones = new Chart(ctxInstituciones, {
            type: 'bar',
            data: {
                labels: labelsInstituciones,
                datasets: datasetsInstituciones,
            },
            options: {
                scales: {
                    x: {
                        stacked: true,
                        title: {
                            display: true,
                            text: 'Institución'
                        }
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: true,
                            text: 'Registro'
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Registro Mensual por Institución'
                    },
                    legend: {
                        display: true,
                        labels: {
                            font: {
                                size: 10
                            }
                        }
                    }
                }
            }
        });

        var barChartSedes = new Chart(ctxSedes, {
            type: 'bar',
            data: {
                labels: labelsSedes,
                datasets: datasetsSedes,
            },
            options: {
                scales: {
                    x: {
                        stacked: true,
                        title: {
                            display: true,
                            text: 'Sede'
                        }
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: true,
                            text: 'Registro'
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Registro Mensual por Sede'
                    },
                    legend: {
                        display: true,
                        labels: {
                            font: {
                                size: 10
                            }
                        }
                    }
                }
            }
        });
    </script>
@stop