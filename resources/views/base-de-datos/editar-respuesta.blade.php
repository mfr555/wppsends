@extends('app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
        Base de datos
    </h1>
    <!--a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i>
        Editar datos de persona
    </a-->
</div>

<section id="editar-respuesta">
    <h2 class="h2 mb-2">
        {{$comcon->comunicacion->nombre}}
    </h2>
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Editar respuesta de {{$comcon->contacto->tratamiento}} {{$comcon->contacto->nombre}} {{$comcon->contacto->apellido}}</h6>
                </div>
                <div class="card-body">

                    @if ($comcon->contacto->lista_negra)
                        <div class="alert alert-warning rounded">
                            <i class="fa fa-info mr-2"></i>
                            Este contacto se encuentra en la lista negra
                        </div>
                    @endif

                    <?php
                        if ($comcon->respuesta_valoracion < 0){
                            $colorResp = 'danger';
                        } else if ($comcon->respuesta_valoracion > 0){
                            $colorResp = 'success';
                        } else {
                            $colorResp = 'warning';
                        }
                    ?>
                    <form action="{{ route('editar-resp') }}" method="POST" autocomplete="off">
                    @csrf
                    <input type="hidden" name="contacto_id" value="{{$comcon->contacto->id}}">
                    <input type="hidden" name="comunicacion_id" value="{{$comcon->comunicacion->id}}">
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="respuesta_resumida">Respuesta:</label>
                                    <input type="text" class="form-control" id="respuesta_resumida" name="respuesta_resumida" value="{{$comcon->respuesta_resumida}}" required>
                                    <small id="tratamientoHelp" class="form-text text-muted">
                                        Por favor resuma la respuesta
                                    </small>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="respuesta_valoracion">Valoración:</label>
                                    @if (isset($comcon->respuesta_valoracion))
                                        <div class="btn btn-{{$colorResp}} btn-circle btn-sm ml-2 mb-2"></div>
                                    @endif
                                    <select class="custom-select" id="respuesta_valoracion" name="respuesta_valoracion" required>
                                        @if (!isset($comcon->respuesta_valoracion))
                                            <option selected></option>
                                        @endif
                                        <option value="1" {{$comcon->respuesta_valoracion==1 ? " selected" : ""}}>+1 Positiva</option>
                                        <option value="0" {{$comcon->respuesta_valoracion==0 ? " selected" : ""}}>0 Neutral</option>
                                        <option value="-1" {{$comcon->respuesta_valoracion==-1 ? " selected" : ""}}>-1 Negativa</option>
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
                                <a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#blacklistModal">
                                    <i class="fas fa-trash"></i>
                                    Lista negra
                                </a>
                            </div>
                            <div class="col">
                                <button onclick="botonCancelar()" class="btn btn-warning btn-block">
                                    <b>X</b> Descartar cambios</button>
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


        <!-- Modal lista negra-->
        <div class="modal fade" id="blacklistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Agregar a lista negra
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Confirmas que {{$comcon->contacto->tratamiento}} {{$comcon->contacto->nombre}} {{$comcon->contacto->apellido}}
                        no desea recibir ningún tipo de comunicaciones por parte de Álvaro Dastugue?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger" href="/lista-negra?comcon={{$comcon->id}}">Si, a la lista negra</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal lista negra-->

    </div>
</section>

<hr>
<section id="volver">
    <a href="/comunicaciones-abrir?id={{$comcon->comunicacion->id}}" class="btn btn-light btn-icon-split">
        <span class="icon text-gray-600">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Volver a campañas</span>
    </a>
</section>
@endsection
