@extends('administrators.index')
@section('title', 'Gestion de Copes')
@section('content')


    <br>

    <div class="container">

        <div class="abc-center">


            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Crear un nuevo COPE</h5>
                        </div>

                        <div class="card-body">


                            <form action="{{ route('administrators.zones.store') }}" method="POST">

                                @csrf

                                <label for="name">
                                    Nombre <br>
                                    <input class="form-control" type="text" name="name" value="{{ old('title', '') }}">

                                </label>


                                <label for="copes_id">
                                    Zonas <br>
                                    <select class="form-select" name="copes_id">
                                        @foreach ($guesaCopes as $guesaCope)
                                            <option value="{{ $guesaCope->id }}">{{ $guesaCope->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <button class="btn btn-primary" type="submit">Registrar</button>

                            </form>



                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">COPES</h5>

                        </div>
                        <div class="card-body">

                            <div class="overflow-auto">

                                <table class="table table-bordered border-primary">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Cope</th>
                                            <th scope="col">Zonas</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($guesaZones as $guesaZone)

                                        <tr>


                                        <td>{{ $guesaZone->id }}</td>
                                        <td>{{ $guesaZone->name }}</td>
                                        <td>{{ optional($guesaZone->cope)->name }}</td>
                                        <td><a href="#" title="Borrar"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-folder-minus"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                                            <path d="M11 11.5a.5.5 0 0 1 .5-.5h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                                        </svg></a></td>



                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>


                            </div>


                            <form class="d-flex">
                                <input class="form-control" type="search" placeholder="Buscar un COPE" aria-label="Search"> &nbsp; &nbsp;
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>




@endsection
