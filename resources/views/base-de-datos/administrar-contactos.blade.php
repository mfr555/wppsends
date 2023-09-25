@extends('app')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
        Base de datos
    </h1>
</div>

<section id="panel-usuario">
    <h2 class="h2 mb-2">Administrar contactos</h2>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4" id="personas">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nuevo contacto</h6>
                </div>
                <div class="card-body">
                    <p>
                        Ingrese aquí la información del nuevo contacto.
                        <br>Tenga en cuenta que el <b>celular es obligatorio e identificatorio</b> en el sistema.
                    </p>
                    <form action="{{ route('contactos') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="tratamiento" name="tratamiento" placeholder="Pastor / Dra. / Lic.">
                            <small id="tratamientoHelp" class="form-text text-muted">
                                Escriba aquí el tratamiento especial, si corresponde. Si tiene más de uno escriba el más relevante
                            </small>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="col">
                                <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido">
                            </div>
                        </div>
                        <!--div class="row">
                            <div class="col-auto">
                                <label>Sexo</label>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexoM" name="sexo" value="masculino" required>
                                        <label class="form-check-label" for="masculino">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexoF" name="sexo" value="femenino">
                                        <label class="form-check-label" for="femenino">Femenino</label>
                                    </div>
                                </div>
                            </div>
                        </div-->
                        <div class="form-group">
                            <input type="text" class="form-control" id="cel" name="cel" required placeholder="Celular">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-auto">
                                    <label for="departamento">Departamento</label>
                                </div>
                                <div class="col">
                                    <select class="custom-select" id="departamento" name="departamento">
                                        <option selected></option>
                                        <option value="Artigas">Artigas</option>
                                        <option value="Canelones">Canelones</option>
                                        <option value="Cerro Largo">Cerro Largo</option>
                                        <option value="Colonia">Colonia</option>
                                        <option value="Durazno">Durazno</option>
                                        <option value="Flores">Flores</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Lavalleja">Lavalleja</option>
                                        <option value="Maldonado">Maldonado</option>
                                        <option value="Montevideo">Montevideo</option>
                                        <option value="Paysandú">Paysandú</option>
                                        <option value="Río Negro">Río Negro</option>
                                        <option value="Rivera">Rivera</option>
                                        <option value="Rocha">Rocha</option>
                                        <option value="Salto">Salto</option>
                                        <option value="San José">San José</option>
                                        <option value="Soriano">Soriano</option>
                                        <option value="Tacuarembó">Tacuarembó</option>
                                        <option value="Treinta y Tres">Treinta y Tres</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-auto">
                                    <label for="origen">Origen del contacto</label>
                                </div>
                                <div class="col">
                                    <select class="custom-select" id="origen" name="origen">
                                        <option selected></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <script>
                            function botonCancelar() {
                                location.reload();
                            }
                        </script>

                        <div class="row">
                            <div class="col">
                                <button onclick="botonCancelar()" class="btn btn-warning btn-block">
                                    <b>X</b> Cancelar</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-success btn-block">
                                    <i class="fas fa-check"></i>
                                     Guardar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>
@endsection
