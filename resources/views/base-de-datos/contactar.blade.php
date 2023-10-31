@extends('app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
            Contactar
        </h1>
        <!--a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i>
                Agregar persona
            </a-->
    </div>

    <section id="contactar">
        <h5 class="mb-2 text-gray-600 text-weight-bold">{{ $comunicacion->nombre }}</h2>
        <div class="row">
            <div class="col-12 mb-4">

                <!-- Enviar mensajes -->
                <div id="enviar_mensajes" class="row">
                    <div class="col-12">

                        <!-- Tabla de contactos -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                @php

                                    switch ($filtro) {
                                        case 'env':
                                            $textoFiltro = "Enviados";
                                            break;

                                        case 'segment_pend':
                                            $textoFiltro = "Segmentados por temáticas y sin enviar";
                                            break;

                                        case 'indet':
                                            $textoFiltro = "Indeterminados";
                                            break;

                                        default:
                                            $textoFiltro = "Todos los contactos";
                                            break;
                                    }
                                @endphp
                                <h6 class="m-0 font-weight-bold text-primary">Enviar mensajes - {{ $textoFiltro }}</h6>

                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header">Filtros:</div>
                                        <a class="dropdown-item {{ (($filtro=='segment_pend') ? 'active' : '') }}"
                                            href="/comunicaciones-abrir?id={{ $comunicacion->id }}&filt=segment_pend">
                                            Segmentados por temáticas y sin enviar
                                        </a>
                                        <a class="dropdown-item {{ (($filtro=='env') ? 'active' : '') }}" href="/comunicaciones-abrir?id={{ $comunicacion->id }}&filt=env">
                                            Enviados
                                        </a>
                                        <a class="dropdown-item {{ (($filtro=='indet') ? 'active' : '') }}" href="/comunicaciones-abrir?id={{ $comunicacion->id }}&filt=indet">
                                            Indeterminados
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item {{ (($filtro=='n') ? 'active' : '') }}" href="/comunicaciones-abrir?id={{ $comunicacion->id }}&filt=n">
                                            Todos los contactos
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Envío</th>
                                                <th>Nombre</th>
                                                <th>Información</th>
                                                <th>Interacción</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Envío</th>
                                                <th>Nombre</th>
                                                <th>Información</th>
                                                <th>Interacción</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            @foreach ($contactos as $contacto)
                                                @if ($filtro=='n'
                                                    || ($filtro=='env'
                                                        && isset($comunicacionContactosMap[$contacto->id])
                                                        && ($comunicacionContactosMap[$contacto->id]->recepcion == 'Respondido'
                                                            || $comunicacionContactosMap[$contacto->id]->recepcion == 'Enviado'))
                                                    || ($filtro=='indet'
                                                        && isset($comunicacionContactosMap[$contacto->id])
                                                        && ($comunicacionContactosMap[$contacto->id]->recepcion == 'Indeterminado'))
                                                    || ($filtro=='segment_pend'
                                                        && !$contacto->lista_negra
                                                        && !isset($comunicacionContactosMap[$contacto->id])
                                                        && $contacto->compatible($comunicacion->tematica1_id, $comunicacion->tematica2_id, $comunicacion->tematica3_id))
                                                    )
                                                    <tr id="fila{{ $contacto->cel }}">
                                                        <td>
                                                            <div id="estado{{ $contacto->cel }}">
                                                                @if (isset($comunicacionContactosMap[$contacto->id]))
                                                                    {{ $comunicacionContactosMap[$contacto->id]->recepcion }}
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $contacto->tratamiento }}
                                                            {{ $contacto->nombre }}
                                                            {{ $contacto->apellido }}
                                                            @if ($contacto->sexo == 'Masculino')
                                                                <i class="fas fa-mars"></i>
                                                            @elseif ($contacto->sexo == 'Femenino')
                                                                <i class="fas fa-venus"></i>
                                                            @endif
                                                            @isset($contacto->origen_id)
                                                                <div class="bg-note p-1 rounded">{{ $contacto->origen->nombre }}
                                                                </div>
                                                            @endisset
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-between">
                                                                <div
                                                                    class="d-inline-flex p-2 {{ $contacto->lista_negra ? 'text-danger' : '' }}">
                                                                    <div class="row">
                                                                        <div class="col-auto">
                                                                            <span
                                                                                class="font-weight-bold font-italic fondo-gris-suave">
                                                                                "{{ $contacto->comentarios }}"
                                                                            </span>
                                                                            <br>
                                                                            Cel: {{ $contacto->cel }}
                                                                            <br>
                                                                            Estado:
                                                                            {{ $contacto->lista_negra ? 'Lista negra' : 'Ok' }}
                                                                            @if (isset($contacto->depatamento_id))
                                                                                <div>{{ $contacto->depatamento }}</div>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="d-inline-flex p-2">
                                                                    <!-- Más Información y edición -->
                                                                    <a href="/contacto-editar?id={{ $contacto->id }}"
                                                                        class="btn btn-info btn-circle btn-sm"
                                                                        data-toggle="tooltip" data-placement="left"
                                                                        title="Más Información / Editar">
                                                                        <i class="fas fa-pen"></i>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            @php
                                                                $botonesParaEstadoIntermedio = view('base-de-datos.partials.botones-para-estado-intermedio',
                                                                                                            ['contacto' => $contacto, 'comunicacion' => $comunicacion]);
                                                                $botonesParaEstadoIntermedioEncoded = json_encode($botonesParaEstadoIntermedio);
                                                            @endphp

                                                            @if (isset($comunicacionContactosMap[$contacto->id]))
                                                                @if ($comunicacionContactosMap[$contacto->id]->recepcion == 'Respondido')
                                                                    <b>Estado del mensaje: Respondido</b>
                                                                    Respuesta:
                                                                    {{ $comunicacionContactosMap[$contacto->id]->respuesta_resumida }}
                                                                    <br>
                                                                    Valoracion:
                                                                    {{ $comunicacionContactosMap[$contacto->id]->respuesta_valoracion }}
                                                                    <hr>
                                                                @elseif ($comunicacionContactosMap[$contacto->id]->recepcion == 'Indeterminado')

                                                                    {{ $botonesParaEstadoIntermedio }}

                                                                @elseif ($comunicacionContactosMap[$contacto->id]->recepcion == 'Error')
                                                                    <b>Estado del mensaje: Error</b>
                                                                @else
                                                                    <b>Estado del mensaje:
                                                                        {{ $comunicacionContactosMap[$contacto->id]->recepcion }}</b>
                                                                @endif

                                                                <a href="/editar-respuesta?contacto_id={{ $contacto->id }}&comunicacion_id={{ $comunicacion->id }}"
                                                                    class="btn btn-info btn-icon-split">
                                                                    <span class="icon text-white-50">
                                                                        <i class="fas fa-pen"></i>
                                                                    </span>
                                                                    <span class="text">Ver o editar respuesta</span>
                                                                </a>
                                                            @elseif (!$contacto->lista_negra && $comunicacion->activa)
                                                                <div id="enviarWpp{{ $contacto->cel }}">
                                                                    <a href="#"
                                                                        class="btn btn-success btn-icon-split">
                                                                        <span class="icon text-white-50">
                                                                            <i class="fas fa-comment"></i>
                                                                        </span>
                                                                        <span class="text">Enviar Wpp</span>
                                                                    </a>
                                                                </div>

                                                                <?php
                                                                    $textoOk = $comunicacion->texto;
                                                                    $textoOk = str_replace('{tratamiento}', $contacto->tratamiento, $textoOk);
                                                                    $textoOk = str_replace('{nombre}', $contacto->nombre, $textoOk);
                                                                    if ($contacto->apellido != '') {
                                                                        $nombreCompleto = $contacto->nombre . ' ' . $contacto->apellido;
                                                                    } else {
                                                                        $nombreCompleto = $contacto->nombre;
                                                                    }
                                                                    $textoOk = str_replace('{nombreCompleto}', $nombreCompleto, $textoOk);
                                                                    if ($contacto->sexo == 'Masculino') {
                                                                        $oa = 'o';
                                                                    } elseif ($contacto->sexo == 'Femenino') {
                                                                        $oa = 'a';
                                                                    } else {
                                                                        $oa = '';
                                                                    }
                                                                    $textoOk = str_replace('{o/a}', $oa, $textoOk);

                                                                    /*IMPLEMENTAR PONER MI FIRMA*/
                                                                    $textoOk = str_replace('{miNombre}', '', $textoOk);
                                                                ?>

                                                                <script>
                                                                    var botonesParaEstadoIntermedio = {{ html_entity_decode($botonesParaEstadoIntermedioEncoded) }};
                                                                    document.getElementById("enviarWpp{{ $contacto->cel }}").addEventListener("click", function() {
                                                                        // Abre el enlace en una nueva ventana o pestaña
                                                                        window.open('https://wa.me/598{{ $contacto->cel }}?text={{ $textoOk }}', '_blank');

                                                                        // Modificar elementos para que marque el envío
                                                                        document.getElementById("estado{{ $contacto->cel }}").innerHTML = "Indeterminado";
                                                                        document.getElementById("enviarWpp{{ $contacto->cel }}").innerHTML = "Actualizar y confirmar envío";//botonesParaEstadoIntermedio;

                                                                        //Actualizar crear comunicación-contacto en la base de datos
                                                                        $.ajax({
                                                                            type: 'GET',
                                                                            url: '/comunicacion-contacto-nueva',
                                                                            data: {
                                                                                    contacto_id: {{ $contacto->id }},
                                                                                    comunicacion_id: {{ $comunicacion->id }}
                                                                                },
                                                                            success: function (data) {
                                                                                //var reporteElement = $('#reporte');
                                                                                //reporteElement.html('Linea #' + idLinea + ' actualizada ')
                                                                            },
                                                                            error: function (error) {
                                                                                //console.log(error);
                                                                            }
                                                                        });
                                                                    });


                                                                </script>
                                                            @endif

                                                        </td>
                                                    </tr>

                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Ver detalles o editar texto -->
                <div id="ver_editar_detalles" class="card shadow mb-4">
                    <div class="accordion">

                        <a href="#contactar{{ $comunicacion->nombre }}" class="d-block card-header py-3"
                            data-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="contactar{{ $comunicacion->nombre }}">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Ver detalles o editar texto
                            </h6>
                        </a>
                        <div class="collapse" id="contactar{{ $comunicacion->nombre }}">
                            <div class="card-body">
                                <form action="comunicaciones-editar" method="POST">
                                    <div class="row">
                                        @csrf
                                        <div id="textoCom" class="col-md-6 col-12">
                                            <label>Texto del mensaje:</label>
                                            <input type="hidden" name="id" value="{{ $comunicacion->id }}">
                                            <textarea class="form-control" id="editor" {{ $comunicacion->activa ? '' : 'disabled' }} name="texto"
                                                rows="8" cols="30">{{ $comunicacion->texto }}</textarea>
                                            @if ($comunicacion->activa)
                                                <div class="d-flex justify-content-end mb-3 mt-3">
                                                    <button type="" class="btn btn-success">
                                                        <i class="fas fa-check"></i>Actualizar
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                        <div id="detallesCom" class="col-md-6 col-12">
                                            <div
                                                class="{{ $comunicacion->activa ? 'border-left-success' : 'border-left-danger' }} shadow rounded">
                                                <div class="card-body mb-3">
                                                    <div class="no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                {{ $comunicacion->nombre }}
                                                            </div>
                                                            <p>
                                                                Estado de la campaña:
                                                                {{ $comunicacion->activa ? 'Activa' : 'Inactiva' }}
                                                                <br> Medio principal: {{ $comunicacion->medio }}
                                                                <br> Fecha:
                                                                {{ date('d/m/Y', strtotime($comunicacion->fecha)) }}
                                                                <br> Temáticas:
                                                                @isset($comunicacion->tematica1_id)
                                                                    {{ $comunicacion->tematica1->nombre }}
                                                                @endisset
                                                                @isset($comunicacion->tematica2_id)
                                                                    / {{ $comunicacion->tematica2->nombre }}
                                                                @endisset
                                                                @isset($comunicacion->tematica3_id)
                                                                    / {{ $comunicacion->tematica3->nombre }}
                                                                @endisset
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Acciones masivas -->
                <div id="acciones_masivas" class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Acciones masivas
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">

                                <form action="/confirmar-mensajes/{{ $comunicacion->id }}" method="POST" >
                                    @csrf
                                    <button class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Confirmar envío de todos los mensajes indeterminados</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </section>
@endsection
