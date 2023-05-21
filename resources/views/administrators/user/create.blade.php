@extends('administrators.index')
@section('title', 'Gestion de usuarios')
@section('content')

    <script src="resources/administrators/users/create.js"></script>

    <br>

    <div class="container">

        <div class="abc-center">


            <div class="card">
                <div class="card-header ">
                    <h5>Crear un nuevo usuario</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('administrators.user.store') }}" method="POST">

                        @csrf

                        <div class="container">
                            <div class="row">
                                <div class="col">

                                    <label for="name" class="form-label">Nombre
                                        <input type="text" class="form-control" id="name" name="name"></label>
                                    <br>
                                </div>
                                @error('name')
                                    <small style="color: brown">{{ $message }}</small>
                                @enderror
                                <div class="col">
                                    <label for="email" class="form-label">
                                        Correo
                                        <input type="text" class="form-control" name="email">
                                    </label><br>
                                    @error('email')
                                        <small style="color: brown">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="role" class="form-label">
                                        Tipo de usuario
                                        <select class="form-select" name="role" aria-label="Default select example">
                                            <option value="super_admin">Super administrador</option>
                                            <option value="admin">Administrador</option>
                                            <option value="technical">Técnico</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="password" class="form-label">
                                        Contraseña
                                        <input type="password" class="form-control" name="password">
                                    </label><br>
                                    @error('password')
                                        <small style="color: brown">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="confirm-password" class="form-label">
                                        Confirmar contraseña
                                        <input type="password" class="form-control" name="confirm-password">
                                    </label>
                                    @error('confirm-password')
                                        <br>
                                        <small style="color: brown">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="cope" class="form-label">
                                        COPES
                                        <select class="cope form-select" name="cope" aria-label="Default select example"
                                            id="cope">

                                            @foreach ($guesaCopes as $guesaCope)
                                                <option value="{{ $guesaCope->id }}">{{ $guesaCope->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="zones_id" class="form-label">
                                        Zona
                                        <select class="zone form-select" name="zones_id" aria-label="Default select example"
                                            id="zones_id">
                                            <option value="">Seleccione una zona</option>
                                        </select>
                                    </label> <br>

                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <br>
                            <button class="btn btn-primary" type="submit">Registrar</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="mb-3">




            </div>
        </div>




    </div>

    <script src="/js/edit.js"></script>


@endsection
