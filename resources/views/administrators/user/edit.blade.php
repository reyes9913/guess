@extends('administrators.index')
@section('title', 'Editar usuario')
@section('content')

    <br>
    <div class="container">

        <div class="abc-center">

            <div class="card">

                <div class="card-header">
                    <h5>Editar un usuario</h5>

                </div>

                <div class="card-body">

                    <div class="container">

                        <form action="{{ route('administrators.user.update', $guesaUser) }}" method="POST">

                            @csrf @method('patch')

                            <div class="row">

                                <div class="col">

                                    <label for="name" class="form-label">
                                        Nombre
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('title', $guesaUser->name) }}">
                                    </label><br>

                                </div>

                            </div>

                            @error('name')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror



                                <div class="col">


                                <label for="email" class="form-label">
                                    Correo
                                    <input type="text" class="form-control" name="email"
                                        value="{{ old('title', $guesaUser->email) }}">
                                </label>


                                </div>

                            <label for="cope" class="form-label">
                                COPES
                                <select class="form-select cope" name="cope" aria-label="Default select example">

                                    @foreach ($guesaCopes as $guesaCope)
                                        <option value="{{ $guesaCope->id }}"
                                            @if ($guesaCope->id == $copes_id) selected @endif>
                                            {{ $guesaCope->name }}</option>
                                    @endforeach

                                </select>

                            </label>

                            <label for="zone" class="form-label">
                                Zona
                                <select class="form-select zone" name="zones_id" aria-label="Default select example">
                                    <option value="{{ $guesaUser->zones_id }}">{{ $guesaUser->byZones->name }}</option>
                                </select>
                            </label>

                            <label for="roll" class="form-label">
                                Tipo de usuario
                                <select class="form-select" name="role" aria-label="Default select example">
                                    <option value="technical" @if ('technical' == $guesaUser->role) selected @endif>Tecnico
                                    </option>
                                    <option value="super_admin" @if ('super_admin' == $guesaUser->role) selected @endif>
                                        Administrador</option>
                                </select>
                            </label>
                            <br>

                            <br>
                            @error('email')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror <br>

                            <label for="password" class="form-label">
                                Contraseña
                                <input type="password" class="form-control" name="password" value="">
                            </label><br>
                            @error('password')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror <br>

                            <label for="confirm-password" class="form-label" name="confirm-password">
                                Confirmar contraseña
                                <input type="password" class="form-control" name="confirm-password">
                            </label>
                            @error('confirm-password')
                                <br>
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                            <br>

                            <div class="d-grid gap-2">
                                <br>
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                            </div>

                        </form>

                    </div>


                </div>


            </div>


        </div>

    </div>

    <script src="/js/edit.js"></script>



@endsection
