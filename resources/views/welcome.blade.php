<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arriendos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* carousel */
            .carousel-caption {
                margin-bottom: 10%;
                background: rgba(0,0,0,0.6);
                padding: 50px 100px;
            }

            .carousel-caption h5{
                font-size:60px;
            }

        </style>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Laboratorio Dbd </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="btn btn-outline-light border-whithe btn-sm" href="/about">Acerca de Nosotros</a>
                    <a class="btn btn-outline-light border-whithe btn-sm" href="/">Menu principal</a>
                </li>
            </ul>
        </nav>
        <!-- Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Arriendos</h5>
                </div>
                <div class="carousel-item active">
                    <img src="img/tools-864983_960_720.jpg" class="d-block w-100" alt="Distintas herramientas en un escritorio">
                </div>
                <div class="carousel-item">
                    <img src="img/garden-2179095_960_720.jpg" class="d-block w-100" alt="Foto de jardín con podadora de césped">
                </div>
                <div class="carousel-item">
                    <img src="img/rake-962756__340.jpg" class="d-block w-100" alt="Rastrillo">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="col text-center">
            <a class="btn btn-dark btn-lg" style="margin:50px" href="/login">Iniciar sesión</a>
            <a class="btn btn-dark btn-lg" style="margin:50px" href="/register">Registrarse</a>
            <a class="btn btn-dark btn-lg" style="margin:50px" href="/dashboard">Dashboard</a>
        </div>
<!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Arriendos
                </div>

                <div class="links">
                    <a href="/login">Login</a>
                    <a href="/dashboard">Dashboard</a>
                    <a href="https://github.com/cesarsasi/labDBD">GitHub</a>
                    <a href="https://laracasts.com"></a>
                    <a href="/assessment/all">Reseñas</a>
                </div>
            </div>
        -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
