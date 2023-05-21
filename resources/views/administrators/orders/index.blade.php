@extends('administrators.index')
@section('title', 'Gestion de ordendes')
@section('content')


    <br>


    <div class="container">

        <div class="abc-center">

            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Registro de ordenes de servicio</h1>
                </div>
                <div class="card-body">



                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nueva orden de cobre &nbsp;
                                        <a href="{{ route('administrators.orders.copper.create') }}" class="btn btn-primary"
                                            aria-pressed="true">Crea una nueva orden</a>

                                    </h5>


                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nueva orden de fibra &nbsp;
                                        <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button"
                                            aria-pressed="true">Crea una nueva orden</a>

                                    </h5>


                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title">Lista de ordenes asignadas</h5>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered border-primary">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tecnico</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Estatus</th>
                                        <th scope="col">Numero de la orden</th>
                                        <th scope="col">Fecha de asignacion</th>
                                        <th scope="col">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guesa_generated_order as $guesa_generated_orders)
                                        <tr>
                                            <td>{{ $guesa_generated_orders->id }}</td>
                                            <td>{{ optional($guesa_generated_orders->technical)->name }}</td>
                                            <td>{{ optional($guesa_generated_orders->customer)->name }}</td>
                                            <td>{{ optional($guesa_generated_orders->order_status)->order_status }}</td>
                                            <td>{{ optional($guesa_generated_orders->installationData)->number_order }}</td>
                                            <td>{{ $guesa_generated_orders->created_at }}</td>
                                            <td><a href="{{ route('administrators.orders.copper.choose', [
                                                'id' => $guesa_generated_orders->id,
                                                'number_order' => optional($guesa_generated_orders->installationData)->number_order,
                                                'customer' => optional($guesa_generated_orders->customer)->name,
                                                'technical' => optional($guesa_generated_orders->technical)->name,
                                                'pdf' => $guesa_generated_orders->pdf_id,
                                            ]) }}"
                                                    title="Detalles"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-file-earmark-ruled"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h7v1a1 1 0 0 1-1 1H6zm7-3H6v-2h7v2z" />
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


        </div>




    @endsection
