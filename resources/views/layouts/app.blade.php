<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Tu Driver') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar-dark {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('vendor/adminlte/dist/img/TUDRIVERLOGO.png') }}" alt="Logo" style="height: 30px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <img src="{{ asset('vendor/adminlte/dist/img/user.png') }}" alt="Login" style="height: 30px;">
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner">
            <img src="{{ asset('vendor/adminlte/dist/img/BANNER-TUDRIVER.png') }}" alt="Banner de TuDriver" class="img-fluid">
        </div>
        <section>
            <div class="row py-2 bg-dark align-items-center">
                <div class="col-md-auto mx-auto d-flex align-items-center">
                <a href="https://www.facebook.com/profile.php?id=100092648514440&mibextid=JRoKGi" target="_blank" style="text-decoration: none; display: flex; align-items: center;">
                    <img src="vendor/adminlte/dist/img/FACEBOOK TUDRIVER@3x.png" alt="Imagen 1" class="img-fluid rounded" style="max-width: 170px;">
                </a>
                </div>
                <div class="col-md-auto mx-auto d-flex align-items-center">
                <a href="https://www.instagram.com/tudriverco?igsh=cWJmdHRqb21wZDA5" target="_blank" style="text-decoration: none; display: flex; align-items: center;">
                    <img src="vendor/adminlte/dist/img/INSTAGRAMTUDRIVER@3x.png" alt="Imagen 1" class="img-fluid rounded" style="max-width: 200px;">
                </a>
                </div>
            </div>
        </section>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>