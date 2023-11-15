@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte matrícula</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="matChart" width="800" height="400"></canvas>
                    <canvas id="matChart2" width="800" height="400"></canvas>
                    <canvas id="matChart3" width="800" height="400"></canvas>
                    <canvas id="myChart" width="600" height="300"></canvas>
                </section>
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="matChart1" width="800" height="400"></canvas>
                    <canvas id="matriculaPorGradoChart" width="600" height="300"></canvas>
                    <canvas id="matChart4" width="800" height="400"></canvas>
                    <canvas id="stackedBarChart" width="800" height="400"></canvas>
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
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Evolución de la Matrícula por Tipo de Institución a lo largo de los Años'
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
                    backgroundColor: index === 0 ? 'rgba(214, 84.5, 71)' : 'rgba(245, 183, 177)', // Ajusta los colores de fondo aquí
                    borderColor: index === 0 ? 'rgba(1192, 57, 43)' : 'rgba(245, 183, 177)', // Ajusta los colores del borde aquí
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
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Tendencia de Matrícula en Sectores Oficial, Contratada y Privada en los Últimos Dos Años'
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
                datasetsEtnias[item.año].data[labelsEtnias.indexOf(item.etnia)] = item.matricula_sum;
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
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Matrícula por Etnia en los Últimos Cinco Años',
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
                    '2019': 'rgba(255, 213, 207)',
                };
                return colors[year];
            }
        });

        // Cuarto gráfico (anillos)
        var data = @json($data);

        var labels = Object.keys(data);
        var datasets = [];

        // Colores fijos para cada grado
        var coloresPorGrado = {
            'Prejardín': 'rgba(192, 57, 43)',
            'Jardín': 'rgba(214, 84.5, 71)',
            'Transición': 'rgba(236, 112, 99)',
            'Primero' : 'rgba(255, 179, 51)',
            'Segundo' : 'rgba(255, 118, 51)',
            'Tercero' : 'rgba(255, 87, 34)',
            'Cuarto' : 'rgba(255, 214, 51)',
            'Quinto' : 'rgba(255, 171, 145)',
            'Sexto' : 'rgba(255, 138, 101)',
            'Septimo' : 'rgba(170, 102, 204)',
            'Octavo' : 'rgba(136, 176, 75)',
            'Noveno' : 'rgba(0, 151, 230)',
            'Decimo' : 'rgba(64, 255, 0)',
            'Once' : 'rgba(102, 153, 153)',
            'Otros grados' : 'rgba(255, 204, 51)' 
        };

        // Itera sobre los años
        labels.forEach(function(año) {
            var matriculaPorGrado = Object.values(data[año]);

            datasets.push({
                data: matriculaPorGrado,
                label: año,
                backgroundColor: matriculaPorGrado.map(function(_, index) {
                    // Asigna el color fijo correspondiente al grado
                    return coloresPorGrado[Object.keys(data[año])[index]];
                }),
            });
        });

        // Configuración del gráfico
        var config = {
            type: 'doughnut',
            data: {
                labels: Object.keys(data[labels[0]]),
                datasets: datasets,
            },
            options: {
                responsive: false, // Desactiva la respuesta automática al tamaño de la ventana
                plugins: {
                    title: {
                        display: true,
                        text: 'Matrícula Total por Grado',
                    }
                }
            }
        };

        // Crea el gráfico en el lienzo
        var ctx = document.getElementById('matriculaPorGradoChart').getContext('2d');
        new Chart(ctx, config);

        // Quinto gráfico (líneas)
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
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Matrícula Estudiantes Venezolanos a lo largo de los años en Instituciones Educativas Oficiales, Contratadas y Privadas',
                        }
                    }
                }
            });

        // Sexto gráfico (barras agrupadas)
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
                backgroundColor: index === 0 ? 'rgba(214, 84.5, 71)' : 'rgba(245, 183, 177)', // Ajusta los colores de fondo aquí
                borderColor: index === 0 ? 'rgba(1192, 57, 43)' : 'rgba(245, 183, 177)', // Ajusta los colores del borde aquí
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
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Matrícula Estudiantes Venezolanos por Sector en los Últimos Dos Años',
                    }
                }
            }
        });

        // Séptimo gráfico (circular)
        var ctx = document.getElementById('myChart').getContext('2d');
        var data = {!! json_encode($data1) !!};

        var labels = data.map(function(item) {
            return item.grado;
        });

        var porcentajes = data.map(function(item) {
            return item.porcentaje;
        });

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    data: porcentajes,
                    backgroundColor: [
                        'rgba(192, 57, 43)',
                        'rgba(214, 84.5, 71)',
                        'rgba(236, 112, 99)',
                        'rgba(255, 179, 51)',
                        'rgba(255, 118, 51)',
                        'rgba(255, 87, 34)',
                        'rgba(255, 214, 51)',
                        'rgba(255, 171, 145)',
                        'rgba(255, 138, 101)',
                        'rgba(170, 102, 204)',
                        'rgba(136, 176, 75)',
                        'rgba(0, 151, 230)',
                    ],
                    borderColor: [
                        'rgba(192, 57, 43)',
                        'rgba(214, 84.5, 71)',
                        'rgba(236, 112, 99)',
                        'rgba(255, 179, 51)',
                        'rgba(255, 118, 51)',
                        'rgba(255, 87, 34)',
                        'rgba(255, 214, 51)',
                        'rgba(255, 171, 145)',
                        'rgba(255, 138, 101)',
                        'rgba(170, 102, 204)',
                        'rgba(136, 176, 75)',
                        'rgba(0, 151, 230)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Porcentaje de Estudiantes Extraedad según Grado Escolar',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                var value = context.parsed.toFixed(2) + '%';
                                return label + ': ' + value;
                            }
                        }
                    }
                }
            }
        });

        // Octavo gráfico (barras apiladas)
        var data = @json($data2);

        // Obtén la lista de sectores y tipos de discapacidad
        var sectors = [...new Set(data.map(item => item.sector))];
            var disabilities = [...new Set(data.map(item => item.discapacidad))];

            // Configura los colores para cada tipo de discapacidad
            var colors = [
                'rgba(192, 57, 43)',
                'rgba(214, 84.5, 71)',
                'rgba(236, 112, 99)',
                'rgba(255, 179, 51)',
                'rgba(255, 118, 51)',
                'rgba(255, 87, 34)',
                'rgba(255, 214, 51)',
                'rgba(255, 171, 145)',
                'rgba(255, 138, 101)',
                'rgba(170, 102, 204)',
                'rgba(136, 176, 75)',
                'rgba(0, 151, 230)',
                'rgba(64, 255, 0)',
                'rgba(102, 153, 153)',
                'rgba(255, 204, 51)',
                'rgba(45, 156, 219)',
                'rgba(176, 58, 46)',
                'rgba(102, 204, 102)',
                'rgba(255, 153, 0)',
                'rgba(153, 102, 204)' 
            ];

            // Agrupa los datos por tipo de discapacidad
            var datasets = disabilities.map(function (disability, index) {
                var dataByDisability = sectors.map(function (sector) {
                    var total = data.find(item => item.sector === sector && item.discapacidad === disability)?.total || 0;
                    return total;
                });

                return {
                    label: disability,
                    data: dataByDisability,
                    backgroundColor: colors[index],
                    borderColor: 'rgba(255,255,255,0.5)',
                    borderWidth: 1,
                    stack: 'stack'
                };
            });

            // Configura el gráfico de barras apiladas
            var ctx = document.getElementById('stackedBarChart').getContext('2d');
            var stackedBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: sectors,
                    datasets: datasets
                },
                options: {
                    scales: {
                        x: {
                            stacked: true,
                            title: {
                                display: true,
                                text: 'Sector'
                            }
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Matrícula'
                            }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Matrícula por Sector según Tipo de Discapacidad'
                        },
                        legend: {
                            display: true,
                            labels: {
                                font: {
                                    size: 10 // Ajusta el tamaño de la fuente de la leyenda
                                }
                            }
                        }
                    }
                }
            });
    </script>
@stop