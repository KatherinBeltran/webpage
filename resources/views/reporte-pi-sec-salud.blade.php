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
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#136">136</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#137">137</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#138">138</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#139">139</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#140">140</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#163">163</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#164">164</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#165">165</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#166">166</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#167">167</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#168">168</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#169">169</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#170">170</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#171">171</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#172">172</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#173">173</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#174">174</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#175">175</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#176">176</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#177">177</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#178">178</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#179">179</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                                <div id="136" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                                <h2>Gestionar la creación de la Cámara de Comercio de Soacha</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo136->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo136->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo136->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo136->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo136->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo136->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo136->meta }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo136->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo136->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo136->indicador }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo136->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <div id="137" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                              <h2>Crear la ruta básica de empleo con enfoque diferencial en el Municipio.</h2>    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo137->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo137->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo137->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo137->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo137->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo137->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart1" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo137->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo137->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo137->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo137->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo137->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              <div id="138" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Identificar y poner en marcha de la red de emprendimiento Municipal.</h2>    
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo138->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo138->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo138->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo138->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo138->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo138->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart2" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo138->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo138->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo138->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo138->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo138->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                <div id="139" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Fortalecer 14 iniciativas empresariales a partir del concurso de innovación,
                                                desarrollo tecnológico y buenas prácticas productivas.</h2> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo139->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo139->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo139->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo139->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo139->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo139->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart3" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo139->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo139->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo139->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo139->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo139->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                           <div id="140" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Integrar mas de 2000 empresas, a través de una plataforma tecnológica que
                                                permita la construcción de la red de producción, comercialización, consumo y
                                                crédito. Generando el renacer económico y social del municipio de Soacha.
                                            </h2>   
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo140->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo140->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo140->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo140->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo140->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo140->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart4" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo140->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo140->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo140->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo140->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo140->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <div id="163" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Realizar vigilancia y control normativo al 100% de las licencias
                                                urbanísticas expedidas y reportadas por las curadurías urbanas.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo163->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo163->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo163->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo163->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo163->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo163->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart5" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo163->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo163->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo163->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo163->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo163->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              <div id="164" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Realizar la revisión general, adopción, reglamentación normativa y
                                                seguimiento del Plan de Ordenamiento Territorial Municipal.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo164->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo164->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo164->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo164->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo164->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo164->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart6" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo164->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo164->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo164->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo164->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo164->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div id="165" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Habilitar el municipio como gestor catastral y preparar la gestión y
                                                operación del servicio público catastral.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo165->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo165->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo165->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo165->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo165->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo165->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart7" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo165->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo165->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo165->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo165->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo165->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              <div id="166" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Actualizar y mantener el 100% de de los predios del Municipio.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo166->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo166->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo166->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo166->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo166->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo166->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart8" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo166->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo166->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo166->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo166->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo166->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="167" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Realizar el 100% de la conservación Catastral.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo167->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo167->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo167->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo167->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo167->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo167->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart9" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo167->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo167->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo167->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo167->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo167->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           <div id="168" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Implementar una estrategia de gestión y mitigación del riesgo en el
                                                Municipio de Soacha.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo168->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo168->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo168->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo168->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo168->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo168->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart10" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo168->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo168->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo168->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo168->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo168->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               <div id="169" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Gestionar la creación de la empresa de renovación urbana.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo169->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo169->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo169->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo169->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo169->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo169->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart11" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo169->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo169->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo169->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo169->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo169->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           <div id="170" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Implementar el Observatorio Inmobiliario.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo170->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo170->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo170->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo170->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo170->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo170->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart12" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo170->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo170->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo170->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo170->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo170->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           <div id="171" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Implementar y poner en funcionamiento la infraestructura de Datos Espaciales</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo171->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo171->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo171->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo171->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo171->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo171->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart13" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo171->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo171->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo171->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo171->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo171->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <div id="172" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Realizar la revisión y actualización del 100% de la nomenclatura vial y
                                                domiciliaria de la zona urbana del municipio.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo172->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo172->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo172->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo172->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo172->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo172->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart14" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo172->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo172->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo172->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo172->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo172->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <div id="173" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Implementar el Geoportal Corporativo Municipal para optimizar los servicios
                                                de atención al ciudadano vía web.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo173->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo173->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo173->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo173->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo173->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo173->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart15" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo173->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo173->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo173->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo173->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo173->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              <div id="174" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Realizar 3 proyectos de intervención en vivienda a través de la gestión de
                                                subsidios de vivienda del nivel departamental y/o nacional.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo174->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo174->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo174->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo174->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo174->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo174->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart16" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo174->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo174->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo174->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo174->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo174->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div id="175" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Actualizar al 100% la estratificación del Municipio y fortalecer el Comité
                                                Permanente de Estratificación del Municipio de Soacha.</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo175->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo175->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo175->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo175->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo175->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo175->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart17" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo175->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo175->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo175->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo175->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo175->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div id="176" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Fortalecer institucionalmente la actualización del Sistema de Potenciales
                                                Beneficiarios para Programas Sociales (SISBEN) en el Municipio de Soacha.
                                            </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo176->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo176->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo176->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo176->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo176->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo176->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart18" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo176->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo176->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo176->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo176->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo176->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <div id="177" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Fortalecer el sistema de información de la inversión, seguimiento y
                                                evaluación del gasto público municipal y las metas de plan de desarrollo
                                                (Banco de Proyectos).</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo177->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo177->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo177->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo177->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo177->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo177->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart19" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo177->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo177->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo177->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo177->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo177->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div id="178" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Diseño y puesta en macha del Banco de Datos "Soacha Municipio en Cifras".
                                            </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo178->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo178->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo178->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo178->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo178->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo178->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart20" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo178->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo178->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo178->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo178->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo178->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <div id="179" class="tab-pane fade">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-4"> <!-- Utiliza col-lg-12 para ocupar toda la anchura del contenedor -->
                                            <h2>Fortalecer el Consejo Territorial de Planeación del Municipio de Soacha.
                                            </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo179->eficiencia_2023_avance_financiero_2023 }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $consecutivo179->eficiencia_2023_avance_financiero_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $consecutivo179->efectividad_2023 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $consecutivo179->efectividad_2023 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA 2023</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="velocimeter" data-value="{{ $consecutivo179->eficiencia_acumulada_avance_fisico }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $consecutivo179->eficiencia_acumulada_avance_fisico }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <!-- Gráfico de barras -->
                                                <div class="col-lg-7">
                                                    <canvas id="barChart21" width="800" height="400"></canvas>
                                                </div>
                                                <!-- Tarjetas con datos -->
                                                <div class="col-lg-5">
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo179->meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Tipo de Meta</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo179->tipo_de_meta }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador de Bienestar</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1;">{{ $consecutivo179->indicador_de_bienestar }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Indicador</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo179->indicador }}</p>
                                                        </div>
                                                    </div>
                                                     <div class="card mb-2" style="height: 50px; background-color: #f8d7da;">
                                                        <div class="card-body" style="padding: 0; line-height: 2;">
                                                            <h5 class="card-title font-weight-bold" style="font-size: 13px; margin: 0;">Entidad Responsable</h5>
                                                            <p class="card-text" style="font-size: 12px; margin: 0; line-height: 1">{{ $consecutivo179->entidad_responsable }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                        <div class="velocimeter" data-value="{{ $averageEficiencia }}" data-max-value="100" style="--color-primary: #3498db; --color-secondary: #85c1e9; --gradient-start: 0%; --gradient-end: {{ $averageEficiencia }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFECTIVIDAD ACTUAL</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $averageEficiencia1 }}" data-max-value="100" style="--color-primary: #6b8e23; --color-secondary:  #c0d68e; --gradient-start: 0%; --gradient-end: {{ $averageEficiencia1 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mx-auto"> <!-- Utiliza col-lg-4 para dividir en 3 columnas dentro del contenedor -->
                                                <div class="card h-100">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">EFICIENCIA ACUMULADA ACTUAL</h5>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="velocimeter" data-value="{{ $averageEficiencia2 }}" data-max-value="100" style="--color-primary: #f1c40f; --color-secondary: #f7dc6f; --gradient-start: 0%; --gradient-end: {{ $averageEficiencia2 }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 mx-auto" id="additionalText">
                                            <canvas id="barChart22" width="800" height="400"></canvas>
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
        var totalCompromisos = {{ $consecutivo136->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo136->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo137->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo137->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo138->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo138->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo139->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo139->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart3').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo140->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo140->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart4').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo163->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo163->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart5').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo164->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo164->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart6').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo165->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo165->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart7').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo166->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo166->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart8').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo167->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo167->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart9').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo168->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo168->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart10').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo169->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo169->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart11').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo170->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo170->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart12').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo171->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo171->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart13').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo172->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo172->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart14').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo173->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo173->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart15').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo174->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo174->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart16').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo175->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo175->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart17').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo176->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo176->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart18').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo177->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo177->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart19').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo178->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo178->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart20').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
                datasets: [{
                    label: 'Comparación Actual',
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
    <script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $consecutivo179->total_compromisos_2023 }};
        var totalObligaciones = {{ $consecutivo179->total_obligaciones }};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart21').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Compromisos 2023', 'Total Obligaciones'],
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

<script>
        // Obtén los valores de las variables PHP
        var totalCompromisos = {{ $totalCompromisos}};
        var totalObligaciones = {{ $totalCompromisos1}};

        // Inicializa Chart.js
        var ctx = document.getElementById('barChart22').getContext('2d');
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