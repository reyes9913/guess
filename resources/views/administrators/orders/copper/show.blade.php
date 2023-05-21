@extends('administrators.index')
@section('title', 'Detalles cobre')
@section('content')

    <br>
    <div class="container">

        <div class="abc-center">

            <div class="card">

                <div class="card-header">

                    <h5>Detalles</h5>

                </div>


                <div class="card-body">

                    <div class="container">
                        <div class="row row-cols-4">
                            <div class="col">
                                <p class="lead">Estado:
                                    {{ optional( $guesa_generated_order->order_status)->order_status }}</p>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="lead">
                                    Numero de order: {{ $guesaInstallationData->number_order }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead">
                                    Telefono: {{ $guesaInstallationData->phone }}
                                </p>
                            </div>
                            <div class="w-100"></div>
                            <div class="col">
                                <p class="lead">
                                    Tipo de O.S.: {{ $guesaInstallationData->number_order }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead">
                                    PISAPLEX: {{ $guesaInstallationData->pisaplex }}
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="lead">
                                    Nombre del cliente: {{ $guesaCustomer->name }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead">
                                    Direccion: {{ $guesaCustomer->address }}
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <p class="lead">
                                Entre calles: {{ $guesaCustomer->between_streets }}
                            </p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="lead">
                                    Edificio: {{ $guesaCustomer->building }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead">
                                    Colonia: {{ $guesaCustomer->municipality }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead">
                                    Departamento: {{ $guesaCustomer->depto }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="lead">
                                    Distrito: {{ $guesaInstallationData->district }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead">
                                    Terminal: {{ $guesaInstallationData->terminal }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead">
                                    Par Secundario: {{ optional($guesaInstallationData->copper)->principal_par }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <p class="lead">
                                Dispositivo: {{ optional($guesaInstallationData->copper)->divice }}
                            </p>
                          </div>
                          <div class="col">
                            <p class="lead">
                                STRIP: {{ optional($guesaInstallationData->copper)->strip }}
                            </p>
                          </div>
                          <div class="col">
                            <p class="lead">
                                Par Principal: {{ optional($guesaInstallationData->copper)->principal_par }}
                            </p>

                          </div>
                        </div>
                      </div>

                </div>

            </div>


        </div>

    </div>


@endsection
