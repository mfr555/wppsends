@extends('app')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
        Base de datos
    </h1>
    <!--a href="#" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i>
        Agregar persona
    </a-->
</div>

<section id="contactar">
    <h2 class="h2 mb-2">Comunicación: {{ $comunicacion->nombre }}</h2>

    <div class="row">
        <div class="col-12 mb-4">


            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <div class="accordion">

                    <a href="#contactar{{ $comunicacion->nombre }}" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="contactar{{ $comunicacion->nombre }}">
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
                                        <textarea class="form-control" id="editor"
                                        {{ ($comunicacion->activa ? '' : 'disabled') }}
                                        name="texto" rows="8" cols="30">{{ $comunicacion->texto }}</textarea>
                                        @if ($comunicacion->activa)
                                            <div class="d-flex justify-content-end mb-3 mt-3">
                                                <button type="" class="btn btn-success">
                                                    <i class="fas fa-check"></i>Actualizar
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                    <div id="detallesCom" class="col-md-6 col-12">
                                        <div class="{{ ($comunicacion->activa ? 'border-left-success' : 'border-left-danger') }} shadow rounded">
                                            <div class="card-body mb-3">
                                                <div class="no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            {{ $comunicacion->nombre }}
                                                        </div>
                                                        <p>
                                                            Estado de la campaña: {{ $comunicacion->activa ? 'Activa' : 'Inactiva' }}
                                                            <br> Medio principal: {{ $comunicacion->medio }}
                                                            <br> Fecha: {{ date('d/m/Y', strtotime($comunicacion->fecha)) }}
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

            <div class="row">
                <div class="col-12">

                    <!-- Tabla de contactos -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Enviar mensajes</h6>
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
                                            <tr id="fila{{$contacto->cel}}">
                                                <td>
                                                    <div id="estado{{$contacto->cel}}">
                                                        @if (isset($comunicacionContactosMap[$contacto->id]))
                                                            {{$comunicacionContactosMap[$contacto->id]->recepcion}}
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
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-inline-flex p-2 {{ ($contacto->lista_negra ? 'text-danger' : '') }}">
                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    Origen: {{ $contacto->origen_id }}
                                                                    <br>
                                                                    <span class="font-weight-bold font-italic fondo-gris-suave" >
                                                                        "{{ $contacto->comentarios }}"
                                                                    </span>
                                                                    <br>
                                                                    Cel: {{ $contacto->cel }}
                                                                    <br>
                                                                    Estado: {{ ($contacto->lista_negra ? 'Lista negra' : 'Ok') }}
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-inline-flex p-2">
                                                            <!-- Más Información y edición -->
                                                            <button href="#" class="btn btn-info btn-circle btn-sm"
                                                            data-toggle="tooltip" data-placement="left" title="Más Información / Editar">
                                                                <i class="fas fa-info-circle"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if (isset($comunicacionContactosMap[$contacto->id]))
                                                        @if ($comunicacionContactosMap[$contacto->id]->recepcion == 'Respondido')
                                                            <b>Estado del mensaje: Respondido</b>
                                                            Respuesta: {{ $comunicacionContactosMap[$contacto->id]->respuesta_resumida }}
                                                            <br>
                                                            Valoracion: {{ $comunicacionContactosMap[$contacto->id]->respuesta_valoracion }}
                                                            <hr>
                                                        @elseif ($comunicacionContactosMap[$contacto->id]->recepcion == 'Indeterminado')
                                                            Resultado inmediato:
                                                            <br>
                                                            <a href="/comunicacion-contacto-actualizar?contacto_id={{$contacto->id}}&comunicacion_id={{$comunicacion->id}}&recepcion=Enviado"
                                                            class="btn btn-success btn-icon-split">
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-check"></i>
                                                                </span>
                                                                <span class="text">Enviado</span>
                                                            </a>

                                                            <a href="/comunicacion-contacto-delete?contacto_id={{$contacto->id}}&comunicacion_id={{$comunicacion->id}}"
                                                            class="btn btn-warning btn-icon-split">
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-trash"></i>
                                                                </span>
                                                                <span class="text">Cancelado</span>
                                                            </a>

                                                            <a href="/comunicacion-contacto-actualizar?contacto_id={{$contacto->id}}&comunicacion_id={{$comunicacion->id}}&recepcion=Error"
                                                            class="btn btn-danger btn-icon-split">
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-exclamation-triangle"></i>
                                                                </span>
                                                                <span class="text">Error al enviar</span>
                                                            </a>


                                                        @elseif ($comunicacionContactosMap[$contacto->id]->recepcion == 'Error')
                                                            <b>Estado del mensaje: Error</b>
                                                        @else
                                                            <b>Estado del mensaje: {{ $comunicacionContactosMap[$contacto->id]->recepcion }}</b>
                                                        @endif

                                                        <a href="/editar-respuesta?contacto_id={{$contacto->id}}&comunicacion_id={{$comunicacion->id}}" class="btn btn-info btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-pen"></i>
                                                            </span>
                                                            <span class="text">Ver o editar respuesta</span>
                                                        </a>

                                                    @elseif (!$contacto->lista_negra && $comunicacion->activa)

                                                        <div id="enviarWpp{{ $contacto->cel }}">
                                                            <a href="/comunicacion-contacto-nueva?contacto_id={{$contacto->id}}&comunicacion_id={{$comunicacion->id}}" class="btn btn-success btn-icon-split">
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
                                                            if ($contacto->apellido != ''){
                                                                $nombreCompleto =  $contacto->nombre.' '.$contacto->apellido;
                                                            } else {
                                                                $nombreCompleto = $contacto->nombre;
                                                            }
                                                            $textoOk = str_replace('{nombreCompleto}', $nombreCompleto, $textoOk);
                                                            if ($contacto->sexo == 'Masculino'){
                                                                $oa = 'o';
                                                            } else if ($contacto->sexo == 'Femenino'){
                                                                $oa = 'a';
                                                            } else {
                                                                $oa = '';
                                                            }
                                                            $textoOk = str_replace('{o/a}', $oa, $textoOk);

                                                            /*IMPLEMENTAR PONER MI FIRMA*/
                                                            $textoOk = str_replace('{miNombre}', '', $textoOk);
                                                        ?>

                                                        <script>
                                                            document.getElementById("enviarWpp{{$contacto->cel}}").addEventListener("click", function() {
                                                                // Abre el enlace en una nueva ventana o pestaña
                                                                window.open('https://wa.me/598{{$contacto->cel}}?text={{$textoOk}}', '_blank');

                                                                // Modificar elementos para que marque el envío
                                                                document.getElementById("estado{{$contacto->cel}}").innerHTML = "Envío a confirmar";
                                                                document.getElementById("enviarWpp{{$contacto->cel}}").innerHTML = "Envío a confirmar";

                                                            });
                                                        </script>


                                                    @endif


                                                </td>
                                            </tr>
                                        @endforeach

                                        <!-- Ejemplo: Contacto al que aún NO se le envió un mensaje -->
                                        <!-- tr>
                                            <td>Pastora Blanca</td>
                                            <td><i class="fas fa-venus"></i></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-9">
                                                        Ult. com. 22/9/23 <br>
                                                        Estado: Ok <br>
                                                        Preferencias: Cristiana <br>
                                                        Origen: Pastores2023
                                                    </div>
                                                    <div class="col-3">
                                                        <Más Información y edición >
                                                        <button href="#" class="btn btn-info btn-circle btn-sm"
                                                        data-toggle="tooltip" data-placement="left" title="Más Información / Editar">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="card bg-secondary text-white shadow">
                                                    <div class="card-body">
                                                        No enviado <br>
                                                        <a href="#" class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-arrow-right"></i>
                                                            </span>
                                                            <span class="text">Enviar WhatsApp</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr-->

                                        <!-- Ejemplo: Contacto al que aún SI se le envió un mensaje >
                                        <tr>
                                            <td>Génesis Santana</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-9">
                                                        Ult. com. 12/9/23 <br>
                                                        Estado: Ok <br>
                                                        Preferencias: Se desconoce<br>
                                                        Origen: Jóvenes2022
                                                    </div>
                                                    <div class="col-3"-->
                                                        <!-- Más Información y edición >
                                                        <button href="#" class="btn btn-info btn-circle btn-sm"
                                                        data-toggle="tooltip" data-placement="left" title="Más Información / Editar">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="card bg-warning text-white shadow">
                                                    <div class="card-body">
                                                        Enviado <br>
                                                        <a href="#" class="btn btn-info btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-pen"></i>
                                                            </span>
                                                            <span class="text">Editar respuesta</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr-->

                                        <!-- Ejemplo: Contacto en lista negra >
                                        <tr>
                                            <td>Diego Recarey</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-9 text-danger">
                                                        Ult. com. 12/9/23 <br>
                                                        Estado: Lista negra <br>
                                                        Origen: Jóvenes2022
                                                    </div>
                                                    <div class="col-3">
                                                        <button href="#" class="btn btn-info btn-circle btn-sm"
                                                        data-toggle="tooltip" data-placement="left" title="Más Información / Editar">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                            </td>
                                            <td-->
                                                <!-- no se le puede enviar un mensaje >
                                            </td>
                                        </tr-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
