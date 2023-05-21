@extends('technical.index')
@section('title', 'Mis ordenes')
@section('content-two')


    <div class="container">

        <br>

        <div class="abc-center">

            <div class="card">

                <div class="card-header">
                    <h1 class="display-6">
                        Ordenes del dia
                    </h1>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-pastel">
                        <thead class="thead-pastel">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Número de orden</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guesaGeneratedOrder as $guesaGeneratedOrders)
                                <tr>
                                    <td>{{ $guesaGeneratedOrders->id }}</td>
                                    <td>{{ optional($guesaGeneratedOrders->customer)->name }}</td>
                                    <td>{{ optional($guesaGeneratedOrders->installationData)->number_order }}</td>
                                    <td>{{ optional($guesaGeneratedOrders->customer)->number_one }}</td>
                                    <td>
                                        <a href="{{ route('technical.orders.show',['id' => $guesaGeneratedOrders->id, 'instalationData' => optional($guesaGeneratedOrders->installationData)->number_order]) }}"
                                            title="Acceder">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                class="bi bi-check2-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                                                <path
                                                    d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>
@endsection
