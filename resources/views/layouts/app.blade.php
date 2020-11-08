<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- Obtencion de los datos del hotel--}}
    <link rel="shortcut icon" href="">
    <title>Hotel Emperador</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- Navbar --}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            {{-- Links navbar lateral --}}
            {{-- Icono para el despliega el navbar --}}
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>

            {{-- Links navbar derecho --}}
            <ul class="navbar-nav ml-auto">
                {{-- Messages Dropdown Menu --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <h5>
                            <i class="fas fa-user"></i>
                            <i class="right fas fa-angle-down"></i>
                        </h5>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 230px;">
                        <center>
                            <a href="#" class="dropdown-item">
                            </a>
                            {{-- Usuario ingresado--}}
                            <br> <span>{{ Auth::user()->name }}
                            </span>
                        </center>
                        <div class="dropdown-divider"></div>

                        {{-- Cierre de sesion --}}
                        <a href="{{ route('logout') }}" class="dropdown-item text-center"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-times-circle"></i> Salir
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{-- Token de verificacion del usuario
                            --}}
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        {{-- Contenido del sidebar --}}
        <aside class="main-sidebar sidebar  elevation-4">
            <a href="/home" class="brand-link" style="background:#1F70DF ">
                <h6 class="text-center" ><b>MENU</b></h6>
            </a>
            {{-- Menu --}}
            @include('layouts.menu')

        </aside>
        {{-- Fin del contenido del sidebar --}}

        {{-- Contenido --}}
        @yield('content')
    </div>
    {{-- Fin navbar--}}
    {{-- Script --}}
    <script src="/js/app.js"></script>

    <script type="application/javascript">
        @yield('script')

    </script>

</body>

</html>
