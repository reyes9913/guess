<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('images/logo.png') }}" rel="icon" type="image/png">
    <title>Guesa - @yield('title')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js']);
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-JZNmI9KYbLedofS7sPmX3HsTJpPw1iF77K1lvO+U7jcl2Xkb1UksdQRVvoxMfooE" crossorigin="anonymous">
    </script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"
        integrity="sha512-NfzoG6yjV6U+/X9Q2h7iByE6ZMXT7Zud/5a5+5Tw5kDzTdV5O5oIzNf8W/QE0OGYiNtVi/zx1vI8wB3q67mxLA=="
        crossorigin crossorigin="anonymous"></script>



</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('technical.index') }}"> <img class="rounded-pill"
                    src="{{ asset('images/guesa_logo.png') }}" alt="Logo de Guesa" width="95" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('technical.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('technical.orders.index', ['id' => Auth::user()->id]) }}">Mis
                            ordenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('technical.record.index') }}">Historial</a>
                    </li>
                </ul>

                @if (Auth::check())
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <span class="nav-link text-white">
                                <strong>{{ Auth::user()->name }}</strong></span>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-custom" aria-disabled="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6.5 3.5a.5.5 0 0 0-1 0v9a.5.5 0 0 0 1 0v-9zm3.5 5a.5.5 0 0 0-1 0v1.5H2V2h7.5V3a.5.5 0 0 0 1 0v5z" />
                                        <path fill-rule="evenodd"
                                            d="M13.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L12.293 7.5H2.5a.5.5 0 0 0 0 1H12.293l-2.147 2.146a.5.5 0 1 0 .708.708l3-3zM1 13.5A.5.5 0 0 0 1 14h13a.5.5 0 0 0 0-1H1a.5.5 0 0 0 0 1z" />
                                    </svg>
                                    Cerrar sesión
                                </button>
                            </form>
                        </li>
                    </ul>
                @endif

            </div>

        </div>

    </nav>


    @yield('content-two')


    <div class="card-footer text-center py-3">
        <div class="text-muted">Copyright &copy; © GUESA INGENIERIA EN
            TELECOMUNICACIONES S.A.S DE C.V 2023</div>

    </div>


    <!-- Agrega los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>

</html>
