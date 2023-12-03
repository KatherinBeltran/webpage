@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reporte afiliación y vacunación</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="coberturaChart" width="600" height="300"></canvas>
                    <canvas id="DPTChart" width="600" height="300"></canvas>
                    <canvas id="TripleViralChart" width="600" height="300"></canvas>
                    <canvas id="TripleViralRefuerzoChart" width="600" height="300"></canvas>
                </section>
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <canvas id="BCGChart" width="600" height="300"></canvas>
                    <canvas id="AntiPolioChart" width="600" height="300"></canvas>
                    <canvas id="DPTRefuerzoChart" width="600" height="300"></canvas>
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
        //Primer gráfico (anillos)
        // Obtener los datos desde PHP (puedes personalizar según tu estructura de datos)
        var data = {!! json_encode($dataAseguramiento) !!};

        // Preparar datos para el gráfico
        var labels = data.map(item => item.año);
        var values = data.map(item => item.indicador * 100);

        // Configurar el gráfico de anillo
        var ctx = document.getElementById('coberturaChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        'rgba(234, 190, 63, 0.2)',
                        'rgba(234, 190, 63, 0.5)',
                        'rgba(234, 190, 63, 0.8)',
                        'rgba(0, 143, 57)',
                        'rgba(0, 143, 57, 0.5)',
                        'rgba(0, 143, 57, 0.8)',
                        'rgba(0, 0, 255)',
                        'rgba(0, 0, 255, 0.5)',
                        'rgba(0, 0, 255, 0.8)',
                    ],
                    borderColor: [
                        'rgba(234, 190, 63, 0.2)',
                        'rgba(234, 190, 63, 0.5)',
                        'rgba(234, 190, 63, 0.8)',
                        'rgba(0, 143, 57)',
                        'rgba(0, 143, 57, 0.5)',
                        'rgba(0, 143, 57, 0.8)',
                        'rgba(0, 0, 255)',
                        'rgba(0, 0, 255, 0.5)',
                        'rgba(0, 0, 255, 0.8)',
                    ],
                    borderWidth: 1,
                }],
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Cobertura Aseguramiento (%)',
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

        // Segundo gráfico (columna agrupadas y lineas)
        // Obtener los datos desde PHP (puedes personalizar según tu estructura de datos)
        var data = {!! json_encode($dataBCG) !!};

        // Preparar datos para el gráfico
        var labels = data.map(item => item.año);
        var numeradorData = data.map(item => item.numerador);
        var denominadorData = data.map(item => item.denominador);
        var indicadorData = data.map(item => item.indicador * 100);

        // Obtener el contexto del canvas
        var ctx = document.getElementById('BCGChart').getContext('2d');

        // Configurar el gráfico de columnas agrupadas y líneas
        window.myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Indicador (%)',
                        data: indicadorData,
                        type: 'line',
                        fill: false,
                        backgroundColor: 'rgba(234, 190, 63)',
                        borderColor: 'rgba(234, 190, 63)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 10,
                        yAxisID: 'y-axis-2',
                    },
                    {
                        label: 'Numerador',
                        data: numeradorData,
                        backgroundColor:  'rgba(0, 143, 57, 0.8)',
                        backgroundColor:  'rgba(0, 143, 57, 0.6)',
                        borderColor:  'rgba(0, 143, 57, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                    {
                        label: 'Denominador',
                        data: denominadorData,
                        backgroundColor: 'rgba(0, 0, 255, 0.6)',
                        borderColor: 'rgba(0, 0, 255, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                ],
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Evolución de la Cobertura de Vacunación BCG en Nacidos Vivos',
                    }
                }
            },
        });

        // Tercer gráfico (columna agrupadas y lineas)
        // Obtener los datos desde PHP (puedes personalizar según tu estructura de datos)
        var data = {!! json_encode($dataDPT) !!};

        // Preparar datos para el gráfico
        var labels = data.map(item => item.año);
        var numeradorData = data.map(item => item.numerador);
        var denominadorData = data.map(item => item.denominador);
        var indicadorData = data.map(item => item.indicador * 100);

        // Obtener el contexto del canvas
        var ctx = document.getElementById('DPTChart').getContext('2d');

        // Configurar el gráfico de columnas agrupadas y líneas
        window.myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Indicador (%)',
                        data: indicadorData,
                        type: 'line',
                        fill: false,
                        backgroundColor: 'rgba(234, 190, 63)',
                        borderColor: 'rgba(234, 190, 63)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 10,
                        yAxisID: 'y-axis-2',
                    },
                    {
                        label: 'Numerador',
                        data: numeradorData,
                        backgroundColor:  'rgba(0, 143, 57, 0.8)',
                        backgroundColor:  'rgba(0, 143, 57, 0.6)',
                        borderColor:  'rgba(0, 143, 57, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                    {
                        label: 'Denominador',
                        data: denominadorData,
                        backgroundColor: 'rgba(0, 0, 255, 0.6)',
                        borderColor: 'rgba(0, 0, 255, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                ],
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Evolución de la Cobertura de Vacunación con DPT Tercera Dosis en Menores de 1 Año',
                    }
                }
            },
        });

        // Cuarto gráfico (columna agrupadas y lineas)
        // Obtener los datos desde PHP (puedes personalizar según tu estructura de datos)
        var data = {!! json_encode($dataAntiPolio) !!};

        // Preparar datos para el gráfico
        var labels = data.map(item => item.año);
        var numeradorData = data.map(item => item.numerador);
        var denominadorData = data.map(item => item.denominador);
        var indicadorData = data.map(item => item.indicador * 100);

        // Obtener el contexto del canvas
        var ctx = document.getElementById('AntiPolioChart').getContext('2d');

        // Configurar el gráfico de columnas agrupadas y líneas
        window.myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Indicador (%)',
                        data: indicadorData,
                        type: 'line',
                        fill: false,
                        backgroundColor: 'rgba(234, 190, 63)',
                        borderColor: 'rgba(234, 190, 63)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 10,
                        yAxisID: 'y-axis-2',
                    },
                    {
                        label: 'Numerador',
                        data: numeradorData,
                        backgroundColor:  'rgba(0, 143, 57, 0.8)',
                        backgroundColor:  'rgba(0, 143, 57, 0.6)',
                        borderColor:  'rgba(0, 143, 57, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                    {
                        label: 'Denominador',
                        data: denominadorData,
                        backgroundColor: 'rgba(0, 0, 255, 0.6)',
                        borderColor: 'rgba(0, 0, 255, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                ],
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Evolución de la Cobertura de Vacunación con Anti Polio Tercera Dosis en Menores de 1 Año',
                    }
                }
            },
        });

        // Quinto gráfico (columna agrupadas y lineas)
        // Obtener los datos desde PHP (puedes personalizar según tu estructura de datos)
        var data = {!! json_encode($dataTripleViral) !!};

        // Preparar datos para el gráfico
        var labels = data.map(item => item.año);
        var numeradorData = data.map(item => item.numerador);
        var denominadorData = data.map(item => item.denominador);
        var indicadorData = data.map(item => item.indicador * 100);

        // Obtener el contexto del canvas
        var ctx = document.getElementById('TripleViralChart').getContext('2d');

        // Configurar el gráfico de columnas agrupadas y líneas
        window.myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Indicador (%)',
                        data: indicadorData,
                        type: 'line',
                        fill: false,
                        backgroundColor: 'rgba(234, 190, 63)',
                        borderColor: 'rgba(234, 190, 63)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 10,
                        yAxisID: 'y-axis-2',
                    },
                    {
                        label: 'Numerador',
                        data: numeradorData,
                        backgroundColor:  'rgba(0, 143, 57, 0.8)',
                        backgroundColor:  'rgba(0, 143, 57, 0.6)',
                        borderColor:  'rgba(0, 143, 57, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                    {
                        label: 'Denominador',
                        data: denominadorData,
                        backgroundColor: 'rgba(0, 0, 255, 0.6)',
                        borderColor: 'rgba(0, 0, 255, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                ],
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Evolución de la Cobertura de Vacunación Contra Triple Viral en Niños y Niñas de 1 año',
                    }
                }
            },
        });

        // Sexto gráfico (columna agrupadas y lineas)
        // Obtener los datos desde PHP (puedes personalizar según tu estructura de datos)
        var data = {!! json_encode($dataDPTRefuerzo) !!};

        // Preparar datos para el gráfico
        var labels = data.map(item => item.año);
        var numeradorData = data.map(item => item.numerador);
        var denominadorData = data.map(item => item.denominador);
        var indicadorData = data.map(item => item.indicador * 100);

        // Obtener el contexto del canvas
        var ctx = document.getElementById('DPTRefuerzoChart').getContext('2d');

        // Configurar el gráfico de columnas agrupadas y líneas
        window.myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Indicador (%)',
                        data: indicadorData,
                        type: 'line',
                        fill: false,
                        backgroundColor: 'rgba(234, 190, 63)',
                        borderColor: 'rgba(234, 190, 63)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 10,
                        yAxisID: 'y-axis-2',
                    },
                    {
                        label: 'Numerador',
                        data: numeradorData,
                        backgroundColor:  'rgba(0, 143, 57, 0.8)',
                        backgroundColor:  'rgba(0, 143, 57, 0.6)',
                        borderColor:  'rgba(0, 143, 57, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                    {
                        label: 'Denominador',
                        data: denominadorData,
                        backgroundColor: 'rgba(0, 0, 255, 0.6)',
                        borderColor: 'rgba(0, 0, 255, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                ],
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Evolución de la Cobertura de Vacunación con DPT Segundo Refuerzo Niños de 5 Años',
                    }
                }
            },
        });

        // Septimo gráfico (columna agrupadas y lineas)
        // Obtener los datos desde PHP (puedes personalizar según tu estructura de datos)
        var data = {!! json_encode($dataTripleViralRefuerzo) !!};

        // Preparar datos para el gráfico
        var labels = data.map(item => item.año);
        var numeradorData = data.map(item => item.numerador);
        var denominadorData = data.map(item => item.denominador);
        var indicadorData = data.map(item => item.indicador * 100);

        // Obtener el contexto del canvas
        var ctx = document.getElementById('TripleViralRefuerzoChart').getContext('2d');

        // Configurar el gráfico de columnas agrupadas y líneas
        window.myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Indicador (%)',
                        data: indicadorData,
                        type: 'line',
                        fill: false,
                        backgroundColor: 'rgba(234, 190, 63)',
                        borderColor: 'rgba(234, 190, 63)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 10,
                        yAxisID: 'y-axis-2',
                    },
                    {
                        label: 'Numerador',
                        data: numeradorData,
                        backgroundColor:  'rgba(0, 143, 57, 0.6)',
                        borderColor:  'rgba(0, 143, 57, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                    {
                        label: 'Denominador',
                        data: denominadorData,
                        backgroundColor: 'rgba(0, 0, 255, 0.6)',
                        borderColor: 'rgba(0, 0, 255, 0.6)',
                        borderWidth: 1,
                        yAxisID: 'y-axis-1',
                    },
                ],
            },
            options: {
                responsive: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Evolución de la Cobertura de Vacunación Contra Triple Viral Segundo Refuerzo en Niños y Niñas de 5 Años',
                    }
                }
            },
        });
    </script>
@stop