@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu Driver</title>
    <!-- Bootstrap -->
    <link href="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/css/bootstrap-4.4.1.css" rel="stylesheet">
    <style>
        .banner {
            background-color: #333;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: transparent;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .float img {
            border-radius: 20px; /* Ajusta este valor para cambiar el radio de los bordes redondeados */
        }

        .float:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <section>
    <div class="jumbotron text-center mt-2">
        <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4 d-flex flex-column justify-content-center">
            <h1><strong>Conoce nuestros planes</strong></h1>
            <h3>Nuestros planes están diseñados para adaptarse a tus necesidades específicas. Contáctanos para más información y descubre cómo podemos facilitar tu traslado entre Ibagué y Bogotá.</h3>
            </div>
            <div class="col-md-4">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2500">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="vendor/adminlte/dist/img/PLANES-DE-TU-DRIVER-VIAJERO-1.png" class="d-block w-100 img-fluid rounded" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="vendor/adminlte/dist/img/PLANES-DE-TU-DRIVER-EXPRESO-1.png" class="d-block w-100 img-fluid rounded" alt="Imagen 2">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <br>
    <section>
        <div class="row">
            <img src="vendor/adminlte/dist/img/BANNER-FUTTER-TUDRIVER.png" alt="Imagen 1" class="img-fluid rounded">
        </div>
    </section>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1><strong>¡Tips de cultura vial!</strong></h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-4 col-12">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 img-fluid" src="vendor/adminlte/dist/img/Tip1.jpeg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">List-based media object</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 img-fluid" src="vendor/adminlte/dist/img/Tip2.jpeg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">List-based media object</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 img-fluid" src="vendor/adminlte/dist/img/Tip3.jpeg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">List-based media object</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Latest Work</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, et, placeat !</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 text-center">
                    <img class="img-fluid" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/400x400.gif" alt="">
                    <h4>Lorem ipsum dolor sit amet, consectetur elit</h4>
                    <h6>Lorem ipsum dolor sit amet, consectetur elit</h6>
                </div>
                <div class="col-md-6 col-12 text-center mt-md-0 mt-2">
                    <img class="img-fluid" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/400x400.gif" alt="">
                    <h4>Lorem ipsum dolor sit amet, consectetur elit</h4>
                    <h6>Lorem ipsum dolor sit amet, consectetur elit</h6>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3 col-6"><img class="img-fluid float-right" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
                <div class="col-md-3 col-6"><img class="img-fluid float-left" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
                <div class="col-md-3 col-6 mt-md-0 mt-1"><img class="img-fluid float-right" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
                <div class="col-md-3 col-6 mt-md-0 mt-1"><img class="img-fluid float-left" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3 col-6"><img class="img-fluid float-right" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
                <div class="col-md-3 col-6"><img class="img-fluid float-left" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
                <div class="col-md-3 col-6 mt-md-0 mt-1"><img class="img-fluid float-right" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
                <div class="col-md-3 col-6 mt-md-0 mt-1"><img class="img-fluid float-left" src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/images/200x200.gif" alt=""></div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, magni, doloribus, possimus eum sapiente deleniti doloremque fugit ut expedita molestiae iusto debitis eveniet modi obcaecati ipsam quos quis labore dicta.</p>
                    <button type="button" class="btn btn-success">Get in touch</button>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h3 class="text-center">WHO WE ARE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, ducimus, sit, quibusdam quidem recusandae veniam eos quod error nisi repellat excepturi laboriosam aspernatur suscipit possimus consectetur dolores nihil labore quas eius illo accusamus nulla sed blanditiis porro accusantium. Perspiciatis, perferendis!</p>
                </div>
                <div class="col-md-4 col-12">
                    <h3 class="text-center">GET IN TOUCH</h3>
                    <address class="text-center">
                        <strong>MyCompany, Inc.</strong><br>
                        Sunny Autumn Plaza, Grand Coulee,<br>
                        CA, 91308-4075, US<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
                <div class="col-md-4 col-12">
                    <h3 class="text-center">¿Te interesan nuestros servicios?</h3>
                    <form method="POST" action="{{ route('guardar-cliente') }}">
                    @csrf
                    <div class="form-group col-12">
                        <input type="text" class="form-control mb-2" id="nom_cli" name="nom_cli" placeholder="Nombre" required>
                        <input type="text" class="form-control" id="num_cel_cli" name="num_cel_cli" placeholder="No. de celular" required>
                        <button type="submit" class="btn btn-dark mt-2">Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <a href="#" class="float">
        <img src="{{ asset('vendor/adminlte/dist/img/gato.jpg') }}" alt="Gato" class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;">
    </a>
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Copyright © MyCompany. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/js/popper.min.js"></script>
    <script src="file:///C|/Users/kathe/AppData/Roaming/Adobe/Dreamweaver 2021/es_ES/Configuration/Temp/Assets/eam71C4.tmp/js/bootstrap-4.4.1.js"></script>
    <!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
@endsection