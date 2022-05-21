<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homeStyle.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'PCommerce') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutus') }}">{{ __('QUIENES SOMOS') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('location') }}">{{ __('UBICACION') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contactus') }}">{{ __('CONTACTO') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center text-lg-start" style="background-color: rgba(0, 0, 0, 0.1); position: relative;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h2 class="text-uppercase">Informacion de contacto</h2>

                        <p>
                            Si deseas que te acesoremos para realizar tus compras o si necesitas ayuda con tu servicio
                            tecnico
                            escribenos a pcommerce@gmail.com
                        </p>
                        <p>Dirección: carrera 2 # 2A - 47</p>
                        <p>Whatsapp: (+57) 3224567821</p>
                        <p>Siguenos en Facebook,Twitter e instragam buscandonos como Compupartes y Servicios</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h2 class="text-uppercase">Horarios de atencion</h2>

                        <table class="table" style="color: #4f4f4f; border-color: #666;">
                            <tbody>
                                <tr>
                                    <td>Lunes - Viernes:</td>
                                    <td>8am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sabados y Domingos:</td>
                                    <td>8am - 12pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>
