@extends('layouts.administrators.app')
@section('title', 'Administradores')
@section('content')

<br>

<div class="container">

    <div class="abc-center">


<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tratamiento especial del título</h5>
          <form action="" method="POST">

            @csrf
            <label for="name" class="form-label">
                Nombre
                <input type="text" class="form-control" name="name">
            </label><br>
            @error('name')
                <small style="color: brown">{{ $message }}</small>
            @enderror
            <br>

            <label for="cope" class="form-label">
                COPES
                <select class="form-select" name="cope" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Pachoacan</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </label>

            <label for="zone" class="form-label">
                Zona
                <select class="form-select" name="zone" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Pachuca</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </label>

            <label for="roll" class="form-label">
                Tipo de usuario
                <select class="form-select" name="roll" aria-label="Default select example">
                    <option value="1">Tecnico</option>
                    <option value="2">Administrador</option>
                </select>
            </label>
            <br>

            <label for="email" class="form-label">
                Correo
                <input type="text" class="form-control" name="email">
            </label><br>
            @error('email')
                <small style="color: brown">{{ $message }}</small>
            @enderror <br>

            <label for="password" class="form-label">
                Contraseña
                <input type="password" class="form-control" name="password">
            </label><br>
            @error('password')
                <small style="color: brown">{{ $message }}</small>
            @enderror <br>

            <label for="confirm-password" class="form-label">
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
                <button class="btn btn-primary" type="submit">Registrar</button>
            </div>



        </form>

          <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tratamiento especial del título</h5>
          <p class="card-text">Con texto de apoyo a continuación como introducción natural a contenido adicional.</p>
          <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
      </div>
    </div>
  </div>


    </div>

</div>


@endsection
