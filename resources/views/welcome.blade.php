@extends('layouts.login.app')
@section('title', 'Login')
@section('content')


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="profile-image-container">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">

                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Ingenieria en Telecomunicaciones
                                    </h3>
                                </div>



                                <div class="card-body">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Usuario</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                aria-describedby="usernameHelp" placeholder="Ingresa tu email">
                                            <small id="usernameHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input id="password" name="password" type="password" class="form-control"
                                                placeholder="Ingresa tu contraseña">
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Recordarme</label>
                                        </div>

                                        <button target="blank" class="btn btn-primary btn-block mx-auto d-block mb-3"
                                            type="submit">Iniciar sesion</button>


                                    </form>

                                </div>

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <!-- Resto del código HTML de la vista -->


                                <div class="card-footer text-center py-3">
                                    <div class="text-muted">Copyright &copy; © GUESA INGENIERIA EN
                                        TELECOMUNICACIONES S.A.S DE C.V 2023</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
