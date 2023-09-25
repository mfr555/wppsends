@extends('app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
        Base de datos
    </h1>
</div>

<section id="panel-usuario">
    <h2 class="h2 mb-2">Administrar campañas de comunicación</h2>
    <div class="row">

        <div class="col-12">
            <div class="card shadow mb-4" id="comunicaciones">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Crear campaña de comunicación</h6>
                </div>
                <div class="card-body">
                    <p>
                        Defina aquí el contenido y configuración de la campaña de comunicación
                    </p>
                    <form action="{{ route('comunicaciones') }}" method="POST">
                        @csrf
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                            <div class="row">
                                <div class="col-md-9 col-12">
                                    <label>Texto del mensaje:</label>
                                    <textarea class="form-control" id="editor" name="texto" rows="10" cols="30"></textarea>
                                </div>
                                <div class="col-md-3 col-12">
                                    <label>Variables:</label>
                                    <button type="button" class="form-control btn btn-secondary mb-2" onclick="insertarTexto('{tratamiento}')">{tratamiento}</button>
                                    <button type="button" class="form-control btn btn-secondary mb-2" onclick="insertarTexto('{nombre}')">{nombre}</button>
                                    <button type="button" class="form-control btn btn-secondary mb-2" onclick="insertarTexto('{nombreCompleto}')">{nombreCompleto}</button>
                                    <button type="button" class="form-control btn btn-secondary mb-2" onclick="insertarTexto('{o/a}')">{o/a}</button>
                                    <button type="button" class="form-control btn btn-secondary mb-2" onclick="insertarTexto('{miNombre}')">{miNombre}</button>
                                </div>

                                <script>
                                    function insertarTexto($fragmento) {
                                        var editor = document.getElementById("editor");
                                        var textoAInsertar = $fragmento; // Puedes cambiar este texto por el que desees
                                        var cursorPos = editor.selectionStart;
                                        var textoActual = editor.value;
                                        var nuevoTexto = textoActual.slice(0, cursorPos) + textoAInsertar + textoActual.slice(cursorPos);
                                        editor.value = nuevoTexto;
                                    }
                                </script>

                            </div>
                            <div class="row col">
                                <label>Temáticas</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <select class="custom-select" id="tematica1" name="tematica1">
                                        <option selected></option>
                                        <!-- cargar temáticas -->
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="custom-select" id="tematica2" name="tematica2">
                                        <option selected></option>
                                        <!-- cargar temáticas -->
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="custom-select" id="tematica3" name="tematica3">
                                        <option selected></option>
                                        <!-- cargar temáticas -->
                                    </select>
                                </div>
                            </div>


                            <script>
                                function botonCancelar() {
                                    location.reload();
                                }
                            </script>

                            <div class="d-flex justify-content-end">
                                <button onclick="botonCancelar()" class="btn btn-warning mr-3">
                                    <b>X</b> Cancelar</button>

                                <button type="" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                        Guardar</button>
                            </div>
                        </form>

                </div>
            </div>

        </div>


        <div class="col-lg-12">
            <div class="card shadow mb-4" id="personas">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Campañas existentes</h6>
                </div>
                <div class="card-body">


                </div>
            </div>
        </div>

    </div>
</section>
@endsection
