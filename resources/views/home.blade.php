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
<h4>Secretaria De </h4>
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
<h4>Secretaria De </h4>
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
<h4>Secretaria De </h4>
<h3>Movilidad</h3>
</div>
<div class="icon">
<i class="fas fa-car"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h4>Secretaria De </h4>
<h3>Hacienda</h3>
</div>
<div class="icon">
<i class="fas fa-home"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

</div>

    <div class="text-center" style="margin-top: 1cm;">
        <p>
            La Secretaría de Planeación y Ordenamiento Territorial en el cumplimiento del Plan de Desarrollo Municipal, “El cambio avanza” (2020 – 2023), adoptado mediante Acuerdo 14 de 2020, refiere en el artículo 63. Programa 5.2 Ciudad Ordenada y en Crecimiento con integración regional, dando cumplimiento a la  meta de producto No 178 Diseño y puesta en marcha del Banco de Datos “Soacha Municipio en cifras”, como estrategia de implementación inicio la construcción y desarrollo del banco de datos la Secretaría de Planeación y Ordenamiento Territorial, pretende gestionar, almacenar, integrar, y actualizar gran cantidad de información en cumplimiento de los indicadores y metas del plan de desarrollo, que pueden provenir de diferentes fuentes, estos datos pueden ser procesados y transformados en información recuperable de manera práctica y eficiente en datos estadísticos, listados, e informes. Con el propósito principal de erradicar el riesgo constante de perdida de información por la rotación de personal, incrementar los niveles de seguridad en la administración de la información, aumentar los niveles de eficiencia en la prestación de servicios oportunos y de calidad a la población soachuna, basados en información confiable actualizada, a su vez pretende beneficiar a funcionarios de la Alcaldía Municipal, suministrándoles información oportuna en tiempo real, eficiente y confiable para prestar un mejor servicio y afrontar de la mejor manera las problemáticas, necesidades y dificultades que afronta la comunidad.
        </p>
        <p style="font-size: 1.5em; font-weight: bold;" style="margin-top: 1cm;">
            Este sistema contiene información relevante y de interés para la estructura, diseño e implementación que tengan futuras administraciones en la implementación del plan de desarrollo.
        </p>
    </div>
@stop




@section('js')
    <script> console.log('Hi!'); </script>
@stop