@extends('administrators.index')
@section('title', 'Cobre')
@section('content')




    <br>

    <div class="container">
        <div class="abc-center">
            <div class="card">
                <div class="card-header">
                    <h1 class="display-6">Cobre</h1>

                </div>

                <div class="card-body">
                    <form action="{{ route('administrators.orders.copper.store') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Datos generales &nbsp; <button type="button"
                                            class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Tecnicos <span class="badge badge-light">4</span>
                                        </button>
                                    </h5>
                                </div>
                                <div class="container">
                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <label>
                                                Tecnico
                                                <select class="form-select" aria-label="Default select example"
                                                    id="technicalSelect" name="technicalSelect">
                                                    @foreach ($guesaUsers as $guesaUser)
                                                        <option value="{{ $guesaUser->id }}">{{ $guesaUser->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col">
                                            <label for="cope" class="form-label">
                                                COPES
                                                <select class="cope form-select" name="cope"
                                                    aria-label="Default select example" id="cope">

                                                    @foreach ($guesaCopes as $guesaCope)
                                                        <option value="{{ $guesaCope->id }}">{{ $guesaCope->name }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col">
                                            <label>
                                                Tipo de orden
                                                <select class="form-select" aria-label="Default select example"
                                                    name='type_ordersH'>
                                                    <option value="">Seleccione un tipo de orden</option>
                                                    <option value="1">HSDF50</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col">
                                            <label for="zones_id" class="form-label">
                                                Zona
                                                <select class="zone form-select" name="zones_id"
                                                    aria-label="Default select example" id="zones_id">
                                                    <option value="">Seleccione una zona</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Datos del cliente &nbsp; <button type="button"
                                            class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-lg">Clientes</button>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label>
                                                    Nombre<br>
                                                    <input class="form-control" type="text" id="nameCustomer"
                                                        name="nameCustomer" readonly>
                                                </label> <br>
                                                @error('name')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror

                                            </div>
                                            <div class="col">
                                                <label>
                                                    Contacto 1<br>
                                                    <input class="form-control" type="text" id="number_one"
                                                        name="number_one" readonly>
                                                </label><br>
                                                @error('number_one')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label>
                                                    Direccion<br>
                                                    <input class="form-control" type="text" id="Address" name="Address"
                                                        readonly>
                                                </label>
                                                <br>
                                                @error('address')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label>
                                                    Contacto 2<br>
                                                    <input class="form-control" type="text" id="number_two"
                                                        name="number_two" readonly>
                                                </label><br>
                                                @error('number_two')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col">
                                                <label>
                                                    Entre calles<br>
                                                    <input class="form-control" type="text" id="between_streets"
                                                        name="between_streets" readonly>
                                                </label><br>

                                                @error('between_streets')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label>
                                                    Edificio<br>
                                                    <input class="form-control" type="text" id="buliding"
                                                        name="buliding" readonly>
                                                </label><br>

                                                @error('building')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <div class="row row-cols-auto">
                                                    <div class="col">
                                                        <label>
                                                            DEPT<br>
                                                            <input class="form-control"type="text" id="depto"
                                                                name="depto" readonly>
                                                        </label><br>

                                                        @error('depto')
                                                            <small style="color: brown">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col"> <label>
                                                    Municipio<br>
                                                    <input class="form-control" type="text" id="municipality"
                                                        name="municipality" readonly>
                                                </label><br>


                                                @error('municipality')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col">
                                                <label>
                                                    Estado<br>
                                                    <input class="form-control" type="text" id="city"
                                                        name="city" readonly>
                                                </label><br>

                                                @error('city')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Datos de la instalacion</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row row-cols-2 row-cols-lg-3">
                                            <div class="col">
                                                <label for="number_order">Order Number</label>
                                                <input id="number_order" name="number_order"class="form-control"
                                                    type="text" value="{{ old('number_order') }}">
                                                @error('number_order')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="footage_type">Footage Type</label>
                                                <input id="footage_type" name="footage_type" class="form-control"
                                                    type="text" value="{{ old('footage_type') }}">
                                                @error('footage_type')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="phone">Phone</label>
                                                <input id="phone" name="phone" class="form-control" type="text"
                                                    value="{{ old('phone') }}">
                                                @error('phone')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="os_type">OS Type</label>
                                                <input id="os_type" name="os_type" class="form-control" type="text"
                                                    value="{{ old('os_type') }}">
                                                @error('os_type')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="os_number">OS Number</label>
                                                <input id="os_number" name="os_number" class="form-control"
                                                    type="text" value="{{ old('os_number') }}">
                                                @error('os_number')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="pisaplex">PISAPLEX</label>
                                                <input id="pisaplex" name="pisaplex" class="form-control"
                                                    type="text" value="{{ old('pisaplex') }}">
                                                @error('pisaplex')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="district">District</label>
                                                <input id="district" name="district" class="form-control"
                                                    type="text" value="{{ old('district') }}">
                                                @error('district')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="port">Port</label>
                                                <input id="port" name="port" class="form-control" type="text"
                                                    value="{{ old('port') }}">
                                                @error('port')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="terminal">Terminal</label>
                                                <input id="terminal" name="terminal" class="form-control"
                                                    type="text" value="{{ old('terminal') }}">
                                                @error('terminal')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-">
                                                <label for="contracted_speed">Contracted Speed</label>
                                                <input id="contracted_speed" name="contracted_speed" class="form-control"
                                                    type="text" value="{{ old('contracted_speed') }}">
                                                @error('contracted_speed')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="delivered_speed">Delivered Speed</label>
                                                <input id="delivered_speed" name="delivered_speed" class="form-control"
                                                    type="text" value="{{ old('delivered_speed') }}">
                                                @error('delivered_speed')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col">
                                                <label for="principal_par">Par principal</label>
                                                <input type="text" id="principal_par" name="principal_par"
                                                    class="form-control" value="{{ old('principal_par') }}">
                                                @error('principal_par')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col">
                                                <label for="principal_sec">Par secundario</label>
                                                <input type="text" id="principal_sec" name="principal_sec"
                                                    class="form-control" value="{{ old('principal_sec') }}">
                                                @error('principal_sec')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col">
                                                <label for="strip">Strip</label>
                                                <input type="text" id="strip" name="strip" class="form-control"
                                                    value="{{ old('strip') }}">
                                                @error('strip')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col">
                                                <label for="divice">Dispositivo</label>
                                                <input type="text" id="divice" name="divice" class="form-control"
                                                    value="{{ old('divice') }}">
                                                @error('divice')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col">

                                                <label for="comments">Comments</label>
                                                <input id="comments" name="comments" class="form-control"
                                                    type="text" value="{{ old('comments') }}">
                                                @error('comments')
                                                    <small style="color: brown">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
                    </div>
                </div>
                <br>

            </div>

        </div>

    </div>


    <!-- Large modal -->

    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLongTitle">Buscar un cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">



                    <label for="customersInput" class="form-label">Buscar cliente</label>
                    <input type="text" class="form-control" id="customersInput">

                    <label>Identificador
                        <input class="form-control" type="text" id="nameId" name="nameId"
                            value="{{ old('nameId') }}" readonly>
                    </label>
                    <br>

                    </form>




                    <table class="table table-bordered border-primary">
                        <br>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Numero</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="customerTableBody">

                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"
                            id="btnAplicar">Aplicar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade  bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Buscar un tecnico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="searchTechnical">Buscar un tecnico </label>
                    <input type="text" class="form-control" name="searchTechnical" id="searchTechnical">

                    <label>Identificador
                        <input class="form-control" type="text" id="technicalId" name="technicalId"
                            value="{{ old('technicalId') }}" readonly>
                    </label>
                    <br>
                    <table class="table table-bordered border-primary">
                        <br>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">En cola</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="technicalTableBody">
                        </tbody>
                    </table>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Aplicar</button>
                </div>
            </div>
        </div>
    </div>




    <script src="/js/edit.js"></script>
    <script src="/js/customerSearch.js"></script>
    <script src="/js/loadedDetailsCustomers.js"></script>







@endsection
