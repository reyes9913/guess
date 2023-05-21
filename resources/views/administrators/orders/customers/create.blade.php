@extends('administrators.index')
@section('title', 'Cobre')
@section('content')



    <br>

    <div class="container">

        <div class="abc-center">


            <div class="row">
                <div class="col-sm-6">


                    <div class="card ">

                        <div class="card-header">
                            <h5 class="card-title">Crear nuevo cliente</h5>
                        </div>



                        <div class="card-body">

                            <form action="{{ route('administrators.orders.customers.store') }}" method="POST">

                                @csrf

                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <label>
                                                Nombre <br>
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ old('title', '') }}">
                                            </label>
                                            @error('name')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror

                                        </div>
                                        <div class="col">
                                            <label>
                                                Contacto 1 <br>
                                                <input class="form-control" type="text" name="number_one"
                                                    value="{{ old('title', '') }}">
                                            </label>
                                            <br>
                                            @error('number_one')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label>
                                                Contacto 2 <br>
                                                <input class="form-control" type="text" name="number_two"
                                                    value="{{ old('title', '') }}">
                                            </label>
                                            <br>
                                            @error('number_two')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>
                                                Calle y Numero <br>
                                                <input class="form-control" type="text" name="address"
                                                    value="{{ old('title', '') }}">
                                            </label>
                                            <br>
                                            @error('address')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">

                                            <label>
                                                Entre calles <br>
                                                <input class="form-control" type="text" name="between_streets"
                                                    value="{{ old('title', '') }}">
                                            </label>
                                            <br>

                                            @error('between_streets')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>
                                                Edificio <br>
                                                <input class="form-control" type="text" name="building"
                                                    value="{{ old('title', '') }}">
                                            </label>
                                            <br>

                                            @error('building')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror

                                        </div>
                                        <div class="col">
                                            <label>
                                                Depto <br>
                                                <input class="form-control" type="text" name="depto"
                                                    value="{{ old('title', '') }}">
                                            </label>
                                            <br>

                                            @error('depto')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>
                                                Estados
                                                <Select class="form-select" y name="city">
                                                    <option value="1">Seleccionar un estados</option>
                                                </Select> <br>

                                            </label>
                                            <br>

                                            @error('city')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror

                                        </div>
                                        <div class="col">

                                            <label>
                                                Municipio
                                                <Select class="form-select" name="municipality">
                                                    <option value="1">Seleccionar un municipio</option>
                                                </Select> <br>
                                            </label>
                                            <br>

                                            @error('municipality')
                                                <small style="color: brown">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit">Registrar</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">


                        <div class="card-header">
                            <h5 class="card-title">Clientes</h5>

                        </div>

                        <div class="card-body">

                            <table class="table">

                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Numero</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($guesaCustomers as $guesaCustomer)
                                        <tr>


                                            <td>{{ $guesaCustomer->id }}</td>
                                            <td>{{ $guesaCustomer->name }}</td>
                                            <td>{{ $guesaCustomer->number_one }}</td>
                                            <td><a href="#" title="Detalles"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-folder-minus" viewBox="0 0 16 16">
                                                        <path
                                                            d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                                                        <path
                                                            d="M11 11.5a.5.5 0 0 1 .5-.5h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                                                    </svg></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
