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
                                        @foreach ($tematicas as $unaTematica)
                                            <option value="{{ $unaTematica }}">{{ $unaTematica }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="custom-select" id="tematica2" name="tematica2">
                                        <option selected></option>
                                        @foreach ($tematicas as $unaTematica)
                                            <option value="{{ $unaTematica }}">{{ $unaTematica }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="custom-select" id="tematica3" name="tematica3">
                                        <option selected></option>
                                        @foreach ($tematicas as $unaTematica)
                                            <option value="{{ $unaTematica }}">{{ $unaTematica }}</option>
                                        @endforeach
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
                    <div class="row">
                        @foreach ($comunicaciones as $oneCom)
                        <div class="col-3">
                            <div class="border-left-primary shadow rounded">
                                <div class="card-body">
                                    <div class="no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                {{ $oneCom->nombre }}
                                            </div>
                                            <p>
                                                Medio principal: {{ $oneCom->medio }}
                                                <br> Fecha: {{ date('d/m/Y', strtotime($oneCom->fecha)) }}
                                                <br> Temáticas:
                                                    @isset($oneCom->tematica1_id)
                                                        <li>{{ $oneCom->tematica1->nombre }}
                                                    @endisset
                                                    @isset($oneCom->tematica2_id)
                                                        / {{ $oneCom->tematica2->nombre }}
                                                    @endisset
                                                    @isset($oneCom->tematica3_id)
                                                        / {{ $oneCom->tematica3->nombre }}
                                                    @endisset
                                            </p>
                                            <!-- Modal comunicacion begin -->
                                                <div class="modal fade" id="modalComunicacion{{ $oneCom->nombre }}" tabindex="-1" role="dialog" aria-labelledby="modalComunicacion{{ $oneCom->nombre }}Label" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">{{ $oneCom->nombre }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>{{ $oneCom->texto }}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- Modal comunicacion ends -->
                                            <!-- Button trigger modal -->
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalComunicacion{{ $oneCom->nombre }}">
                                                    Ver texto
                                                </button>
                                            </div>
                                            <!-- Button trigger modal ends -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection