@extends('technical.index')
@section('title', 'Cobre')
@section('content-two')

    <div class="container">

        <br>

        <div class="abc-center">

            <div class="card">

                <div class="card-header">

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="display-6">Detalles - Cobre</h1>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Confirmar orden <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-skip-start" viewBox="0 0 16 16">
                                            <path
                                                d="M4 4a.5.5 0 0 1 1 0v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L5 8.752V12a.5.5 0 0 1-1 0V4zm7.5.633L5.696 8l5.804 3.367V4.633z" />
                                        </svg>
                                    </button>

                                    <button class="btn btn-primary btn-lg">PDF <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                        </svg></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="card shadow-sm p-3 mb-5 bg-body rounded">

                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="display-6">Cliente</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="card-title">Nombre</h5>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->name) }}"
                                                            readonly>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Contacto 1</h5>
                                                        <input type="text" class="form-control" name="number_one"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->number_one) }}"
                                                            readonly>
                                                        <h5 class="card-title">Contacto 2</h5>
                                                        <input type="text" class="form-control" name="number_two"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->number_two) }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Dirección</h5>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->address) }}"
                                                            readonly>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Entre calles</h5>
                                                        <input type="text" class="form-control" name="between_streets"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->between_streets) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Edificio</h5>
                                                        <input type="text" class="form-control" name="building"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->building) }}"
                                                            readonly>
                                                        <h5 class="card-title">Departamento</h5>
                                                        <input type="text" class="form-control" name="depto"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->depto) }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="card-title">Municipio</h5>
                                                        <input type="text" class="form-control" name="municipality"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->municipality) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="card-title">Ciudad</h5>
                                                        <input type="text" class="form-control" name="city"
                                                            value="{{ old('title', $guesaGeneratedOrder->customer->city) }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="container">
                                    <button type="button" id="btn_edit_customer" class="btn btn-primary">Editar
                                        información</button>
                                </div>
                            </div>

                        </div>



                        <div class="card shadow-sm p-3 mb-5 bg-body rounded">

                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="display-6">Instalación</h1>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="card-title">Número de la orden</h5>
                                                        <input type="text" class="form-control" name="number_order"
                                                            value="{{ old('title', $guesaInstalacionData->number_order) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Tipo de tecnología</h5>
                                                        <p class="lead">{{ $guesaInstalacionData->copper->name }}</p>
                                                        <input type="text" class="form-control" name="number_order"
                                                            value="{{ old('title', $guesaInstalacionData->number_order) }}"
                                                            readonly>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Tipo de metraje</h5>
                                                        <select name="footage_type" id="footage_type"
                                                            class="form-select">
                                                            <option value="">Seleccione un metraje</option>
                                                            <option value="aereo">Aereo</option>
                                                            <option value="subterraneo">Subterraneo</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Número telefónico</h5>
                                                        <input type="text" class="form-control" name="phone"
                                                            value="{{ old('title', $guesaInstalacionData->phone) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Tipo de O.S.</h5>
                                                        <input type="text" class="form-control" id="os_type"
                                                            name="os_type"
                                                            value="{{ old('title', $guesaInstalacionData->os_type) }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="card-title">PISAPLEX</h5>
                                                        <input type="text" class="form-control" id="pisaplex"
                                                            name="pisaplex"
                                                            value="{{ old('title', $guesaInstalacionData->pisaplex) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="card-title">Distrito</h5>
                                                        <input type="text" class="form-control" id="district"
                                                            name="district"
                                                            value="{{ old('title', $guesaInstalacionData->district) }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h5 class="card-title">Puerto</h5>
                                                        <input type="text" class="form-control" id="port"
                                                            name="port"
                                                            value="{{ old('title', $guesaInstalacionData->port) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Secundario</h5>
                                                        <input type="text" class="form-control" id="terminal"
                                                            name="terminal"
                                                            value="{{ old('title', $guesaInstalacionData->terminal) }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Velocidad contratada</h5>
                                                        <input type="text" class="form-control" id="contracted_speed"
                                                            name="contracted_speed"
                                                            value="{{ old('title', $guesaInstalacionData->contracted_speed) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Velocidad entregada</h5>
                                                        <input type="text" class="form-control" id="delivered_speed"
                                                            name="delivered_speed"
                                                            value="{{ old('title', $guesaInstalacionData->delivered_speed) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="card-title">Par secundario</h5>
                                                        <input type="text" class="form-control" id="principal_sec"
                                                            name="principal_sec"
                                                            value="{{ old('title', $guesaInstalacionData->copper->principal_sec) }}"
                                                            readonly>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="card-title">Par principal</h5>
                                                        <input type="text" class="form-control" id="principal_par"
                                                            name="principal_par"
                                                            value="{{ old('title', $guesaInstalacionData->copper->principal_par) }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="card-title">Dispositivo</h5>
                                                        <input type="text" class="form-control" id="divice"
                                                            name="divice"
                                                            value="{{ old('title', $guesaInstalacionData->copper->divice) }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="container">
                                    <button type="button" class="btn btn-primary" id="btn_edit_instalation_data">Editar
                                        información</button>
                                </div>
                            </div>

                        </div>


                        <div class="card shadow-sm p-3 mb-5 bg-body rounded">

                            <div class="card-body">

                                <div class="container">


                                    <div class="row">
                                        <div class="col-4">
                                            <h1 class="display-6">Evidencia fotografica</h1><br>
                                            <p id="location"></p>
                                        </div>
                                        <div class="col-8">


                                            @csrf

                                            <div class="container">
                                                <div class="row row-cols-2">
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">1.- Secundario abierto</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada"
                                                                    name="foto_capturada">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">2.- Secundario abierto y par</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-2" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-2"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada"
                                                                    name="foto_capturada-2">
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="col">

                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">3.- Trayectoria hacia el
                                                                secundario</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-3" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-3"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-3"
                                                                    name="foto_capturada-3">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">4.- Remate hacia el domicilio</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-4" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-4"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-4"
                                                                    name="foto_capturada-4">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">5.- Forma de ingreso hacia el domicilio
                                                            </h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-5" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-5"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-5"
                                                                    name="foto_capturada-5">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">6.- Trayectoria dentro del domicilio
                                                            </h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-6" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-6"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-6"
                                                                    name="foto_capturada-6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">7.- DIP y Muela</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-7" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-7"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-7"
                                                                    name="foto_capturada-7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">8.- Modem con servicios</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-8" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-8"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-8"
                                                                    name="foto_capturada-8">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">9.- Datos del modem</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-9" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-9"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-9"
                                                                    name="foto_capturada-9">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">10.- Datos de la ONT</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-10" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-10"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-10"
                                                                    name="foto_capturada-10">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">11.- Pantalla de aprovisionamiento</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-11" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-11"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-11"
                                                                    name="foto_capturada-11">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card" style="width: 18rem;">
                                                            <h5 class="card-header">12.- Pantalla de liquidacion</h5>

                                                            <div class="card-body">
                                                                <img id="captura-img-12" class="img-fluid"
                                                                    alt="Foto capturada">
                                                            </div>
                                                            <div class="card-body">
                                                                <button type="button" id="btn-capturar-12"
                                                                    class="btn btn-primary">Tomar foto</button>
                                                                <input type="hidden" id="foto-capturada-12"
                                                                    name="foto_capturada-12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                </div>
            </div>

        </div>

    </div>

    </div>

    </div>

    </div>

    </div>

    <script src="/js/location.js"></script>
    <script src="/js/photoCamera.js"></script>
    <script src="/js/removAtributo.js"></script>





<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Confirmación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Esta seguro que desea confirmar la orden?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, cerrar</button>
                <button type="submit" class="btn btn-primary">Si, confirmar</button>
            </div>
        </div>
    </div>
</div>

</form>

@endsection
