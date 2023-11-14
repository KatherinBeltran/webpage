@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte matricula</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="matChart" width="800" height="400"></canvas>
                    <canvas id="matChart2" width="600" height="400"></canvas>
                    <canvas id="matChart3" width="800" height="400"></canvas>
                </section>
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="matChart1" width="800" height="400"></canvas>
                    <canvas id="matChart4" width="800" height="400"></canvas>
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
        document.addEventListener("DOMContentLoaded", function () {
            // Primer gráfico (líneas)
            var data = {!! json_encode($matData) !!};

            var years = [];
            var oficialData = [];
            var contratadaData = [];
            var privadaData = [];

            data.forEach(function (item) {
                years.push(item.año);
                oficialData.push(item.oficial_sum);
                contratadaData.push(item.contratada_sum);
                privadaData.push(item.privada_sum);
            });

            var ctx = document.getElementById('matChart').getContext('2d');
            var matChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: years,
                    datasets: [
                        {
                            label: 'Oficial',
                            data: oficialData,
                            backgroundColor: 'rgba(192, 57, 43)',
                            borderColor: 'rgba(192, 57, 43)',
                            borderWidth: 1,
                            fill: false
                        },
                        {
                            label: 'Contratada',
                            data: contratadaData,
                            backgroundColor:  'rgba(214, 84.5, 71)',
                            borderColor:  'rgba(214, 84.5, 71)',
                            borderWidth: 1,
                            fill: false
                        },
                        {
                            label: 'Privada',
                            data: privadaData,
                            backgroundColor: 'rgba(236, 112, 99)',
                            borderColor: 'rgba(236, 112, 99)',
                            borderWidth: 1,
                            fill: false
                        }
                    ]
                },
                options: {
                    scales: {
                        x: {
                            type: 'linear',
                            position: 'bottom',
                            title: {
                                display: true,
                                text: 'Año'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Matrícula'
                            }
                        }
                    }
                }
            });

            // Segundo gráfico (barras agrupadas)
            var lastTwoYearsData = {!! json_encode($lastTwoYearsData) !!};

            var labels = Object.keys(lastTwoYearsData);
            var datasets = [];

            labels.forEach(function (year, index) {
                var sumOficial = lastTwoYearsData[year].reduce(function (total, item) {
                    return total + item.oficial;
                }, 0);

                var sumContratada = lastTwoYearsData[year].reduce(function (total, item) {
                    return total + item.contratada;
                }, 0);

                var sumPrivada = lastTwoYearsData[year].reduce(function (total, item) {
                    return total + item.privada;
                }, 0);

                datasets.push({
                    label: year,
                    data: [sumOficial, sumContratada, sumPrivada],
                    backgroundColor: index === 0 ? 'rgba(214, 84.5, 71)' : 'rgba(236, 112, 99)', // Ajusta los colores de fondo aquí
                    borderColor: index === 0 ? 'rgba(1192, 57, 43)' : 'rgba(236, 112, 99)', // Ajusta los colores del borde aquí
                    borderWidth: 1,
                    barPercentage: 0.7, // Ajusta el ancho de las barras
                    categoryPercentage: 0.6, // Ajusta el espacio entre las barras
                });
            });

            var ctx2 = document.getElementById('matChart1').getContext('2d');
            var matChart1 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Oficial', 'Contratada', 'Privada'],
                    datasets: datasets,
                },
                options: {
                    scales: {
                        x: {
                            stacked: false,
                            title: {
                                display: true,
                                text: 'Sector'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            stacked: false,
                            title: {
                                display: true,
                                text: 'Matrícula'
                            }
                        }
                    }
                }
            });

            // Tercer gráfico (barras agrupadas por año y etnias)
            var lastFiveYearsDataEtnias = {!! json_encode($lastFiveYearsDataEtnias) !!};

            var labelsEtnias = [];
            var datasetsEtnias = {};

            lastFiveYearsDataEtnias.forEach(function (item) {
                if (!labelsEtnias.includes(item.etnia)) {
                    labelsEtnias.push(item.etnia);
                }

                if (!datasetsEtnias[item.año]) {
                    datasetsEtnias[item.año] = {
                        label: item.año,
                        data: [],
                        backgroundColor: getBarColor(item.año),
                        borderColor: getBarColor(item.año),
                        borderWidth: 1,
                        barPercentage: 0.35, // Ajusta el ancho de las barras
                        categoryPercentage: 0.8, // Ajusta el espacio entre las barras
                    };
                }

                // Asegúrate de que haya un valor para cada etnia
                datasetsEtnias[item.año].data[labelsEtnias.indexOf(item.etnia)] = item.valor_sum;
            });

            var ctx3 = document.getElementById('matChart2').getContext('2d');
            var matChart2 = new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: labelsEtnias,
                    datasets: Object.values(datasetsEtnias),
                },
                options: {
                    scales: {
                        x: {
                            stacked: false,
                            title: {
                                display: true,
                                text: 'Etnia'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            stacked: false,
                            title: {
                                display: true,
                                text: 'Matrícula'
                            }
                        }
                    }
                }
            });

            // Función para obtener colores específicos para las barras
            function getBarColor(year) {
                var colors = {
                    '2023': 'rgba(192, 57, 43)',
                    '2022': 'rgba(214, 84.5, 71)',
                    '2021': 'rgba(236, 112, 99)',
                    '2020': 'rgba(245, 183, 177)',
                    '2019': 'rgba(245, 183, 177)',
                };
                return colors[year];
            }
        });

        // Cuarto gráfico (líneas)
        var data = {!! json_encode($matData1) !!};

            var years = [];
            var oficialData = [];
            var contratadaData = [];
            var privadaData = [];

            data.forEach(function (item) {
                years.push(item.año);
                oficialData.push(item.oficial_sum);
                contratadaData.push(item.contratada_sum);
                privadaData.push(item.privada_sum);
            });

            var ctx = document.getElementById('matChart3').getContext('2d');
            var matChart3 = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: years,
                    datasets: [
                        {
                            label: 'Oficial',
                            data: oficialData,
                            backgroundColor: 'rgba(192, 57, 43)',
                            borderColor: 'rgba(192, 57, 43)',
                            borderWidth: 1,
                            fill: false
                        },
                        {
                            label: 'Contratada',
                            data: contratadaData,
                            backgroundColor:  'rgba(214, 84.5, 71)',
                            borderColor:  'rgba(214, 84.5, 71)',
                            borderWidth: 1,
                            fill: false
                        },
                        {
                            label: 'Privada',
                            data: privadaData,
                            backgroundColor: 'rgba(236, 112, 99)',
                            borderColor: 'rgba(236, 112, 99)',
                            borderWidth: 1,
                            fill: false
                        }
                    ]
                },
                options: {
                    scales: {
                        x: {
                            type: 'linear',
                            position: 'bottom',
                            title: {
                                display: true,
                                text: 'Año'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Matrícula'
                            }
                        }
                    }
                }
            });

        // Quinto gráfico (barras agrupadas)
        var lastTwoYearsData = {!! json_encode($lastTwoYearsData1) !!};

        var labels = Object.keys(lastTwoYearsData);
        var datasets = [];

        labels.forEach(function (year, index) {
            var sumOficial = lastTwoYearsData[year].reduce(function (total, item) {
                return total + item.oficial;
            }, 0);

            var sumContratada = lastTwoYearsData[year].reduce(function (total, item) {
                return total + item.contratada;
            }, 0);

            var sumPrivada = lastTwoYearsData[year].reduce(function (total, item) {
                return total + item.privada;
            }, 0);

            datasets.push({
                label: year,
                data: [sumOficial, sumContratada, sumPrivada],
                backgroundColor: index === 0 ? 'rgba(214, 84.5, 71)' : 'rgba(236, 112, 99)', // Ajusta los colores de fondo aquí
                borderColor: index === 0 ? 'rgba(1192, 57, 43)' : 'rgba(236, 112, 99)', // Ajusta los colores del borde aquí
                borderWidth: 1,
                barPercentage: 0.7, // Ajusta el ancho de las barras
                categoryPercentage: 0.6, // Ajusta el espacio entre las barras
            });
        });

        var ctx2 = document.getElementById('matChart4').getContext('2d');
        var matChart4 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Oficial', 'Contratada', 'Privada'],
                datasets: datasets,
            },
            options: {
                scales: {
                    x: {
                        stacked: false,
                        title: {
                            display: true,
                            text: 'Sector'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        stacked: false,
                        title: {
                            display: true,
                            text: 'Matrícula'
                        }
                    }
                }
            }
        });
    </script>
@stop