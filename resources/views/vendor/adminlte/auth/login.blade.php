@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <style>
        body {
            background-image: url('{{ asset('vendor/adminlte/dist/img/TuDriverLogin.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
@stop

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('auth_header', __('Iniciar sesión'))

@section('auth_body')
    <form action="{{ $login_url }}" method="post">
        @csrf

        {{-- Email field --}}
        <div class="input-group mb-3">
        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="@tudriver.com" placeholder="usuario" aria-label="Correo electrónico">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="{{ __('Contraseña') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-13">
            <button type="submit" class="btn btn-block btn-danger mb-3">
                <span class="fas fa-sign-in-alt"></span>
                {{ __('Ingresar') }}
            </button>
        </div>

        {{-- Login field --}}
        <div class="row">
            <div class="col-12">
                <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                    {{-- Register link --}}
                    @if($register_url)
                        <p class="my-0 text-danger">
                            <a href="{{ $register_url }}" class="text-danger">
                                {{ __('Registrar una nueva membresía') }}
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        </div>

    </form>
@stop

@section('auth_footer')
    {{-- Password reset link --}}
    @if($password_reset_url)
    {{--<p class="my-0">
            <a href="{{ $password_reset_url }}">
                {{ __('Olvidé mi contraseña') }}
            </a>
        </p>--}}
    @endif
@stop

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const emailInput = document.getElementById('email');
        const domain = '@tudriver.com';

        emailInput.addEventListener('focus', function () {
            // Cuando el campo recibe el enfoque, asegúrate de que el usuario pueda editar el campo completo
            emailInput.value = emailInput.value.replace(domain, '');
        });

        emailInput.addEventListener('blur', function () {
            // Al salir del campo, vuelve a agregar el dominio si es necesario
            if (!emailInput.value.endsWith(domain)) {
                emailInput.value += domain;
            }
        });
    });
</script>