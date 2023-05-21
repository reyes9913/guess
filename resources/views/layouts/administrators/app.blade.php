<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guesa - @yield('title')</title>
    <link href="{{ asset('images/logo.png') }}" rel="icon" type="image/png">
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
            <a class="navbar-brand" href="{{ route('administrators.index') }}"> <img class="rounded-pill" src="{{ asset('images/guesa_logo.png') }}"
                    alt="Logo de Guesa" width="95" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('administrators.orders.today') }}">Hoy</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Usuarios</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('administrators.user.create') }}">Crear
                                    usuario</a></li>

                            <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('administrators.user.show') }}">Mostrar usuarios</a>
                    </li>

                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('administrators.orders.index') }}">Gestion de
                                ordenes</a></li>
                        <li><a class="dropdown-item" href="#">Editar orden</a></li>
                        <li><a class="dropdown-item"
                                href="{{ route('administrators.orders.customers.create') }}">Clientes</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Generacion de reportes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Zonas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('administrators.copes.create') }}">Gestionar
                                Zona</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('administrators.zones.create') }}">Gestionar
                                COPE</a></li>
                    </ul>
                </li>
                <li class="nav-item">

                </li>
                </ul>

                <form class="d-flex" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-custom" aria-disabled="true">Cerrar sesion</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Agrega los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>


</html>
