@extends('technical.index')
@section('title', 'Fibra')
@section('content-two')

    <div class="container">

        <br>

        <div class="abc-center">

            <div class="card">

                <div class="card-header">
                    <h1 class="display-6">Detalles de la orden </h1>
                </div>
                <div class="card-body">


                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <h1 class="display-6">Cliente</h1>
                            </div>
                            <div class="col-sm-8">
                                <div class="container">
                                    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="lead">{{ $guesaGeneratedOrder->customer->name }}</p>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <p class="lead">{{ $guesaGeneratedOrder->customer->number_one }} /
                                                {{ $guesaGeneratedOrder->customer->number_two }} </p>
                                        </div>
                                    </div>

                                    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <p class="lead">{{ $guesaGeneratedOrder->customer->address }} </p>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <p class="lead"> {{ $guesaGeneratedOrder->customer->between_streets }} </p>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <p class="lead"> {{ $guesaGeneratedOrder->customer->building }} </p>
                                            <p class="lead"> {{ $guesaGeneratedOrder->customer->depto }}
                                        </div>
                                    </div>

                                    <!-- Columns are always 50% wide, on mobile and desktop -->
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="lead"> {{ $guesaGeneratedOrder->customer->municipality }} </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="lead"> {{ $guesaGeneratedOrder->customer->city }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h1 class="display-6">Instalación</h1>
                                </div>
                                <div class="col-sm-8"><div class="container">
                                    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                    <div class="row">
                                      <div class="col-md-8"><p class="lead">{{  $guesaInstalacionData->number_order }}</p></div>
                                      <div class="col-6 col-md-4"><p class="lead">{{  $guesaInstalacionData->number_order }}</div>
                                    </div>

                                    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                                    <div class="row">
                                      <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                      <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                      <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                    </div>

                                    <!-- Columns are always 50% wide, on mobile and desktop -->
                                    <div class="row">
                                      <div class="col-6">.col-6</div>
                                      <div class="col-6">.col-6</div>
                                    </div>
                                  </div></div>
                            </div>


                            <a href="#" class="link-success">Iniciar orden</a>

                        </div>


                    </div>

                </div>

            </div>
        @endsection
