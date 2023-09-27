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
    <h2 class="h2 mb-2">Contactar a personas</h2>

    <div class="row">
        <div class="col-12 mb-4">


            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <div class="accordion">
                    @foreach ($comunicaciones as $comunicacion)
                        <a href="#contactar{{ $comunicacion->nombre }}" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="contactar{{ $comunicacion->nombre }}">
                            <h6 class="m-0 font-weight-bold text-primary">
                                {{ $comunicacion->nombre }} : Fecha {{ $comunicacion->fecha }}
                            </h6>
                        </a>
                        <div class="collapse" id="contactar{{ $comunicacion->nombre }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="ccol-xl-3 col-md-6 mb-4">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Texto de esta comunicación
                                        </div>
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body bg-light">

                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-success mb-1">
                                                            {{ $comunicacion->texto }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-secondary btn-icon-split btn-sm">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-flag"></i>
                                                            </span>
                                                            <span class="text">Modificar texto</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">

                                    <!-- Tabla de contactos -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Contactos</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Tit.</th>
                                                            <th>Nombre</th>
                                                            <th>Apellido</th>
                                                            <th>Sx</th>
                                                            <th>Información</th>
                                                            <th>Respuesta</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Tit.</th>
                                                            <th>Nombre</th>
                                                            <th>Apellido</th>
                                                            <th>Sx</th>
                                                            <th>Información</th>
                                                            <th>Respuesta</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>

                                                        <!-- Ejemplo: Contacto al que aún NO se le envió un mensaje -->
                                                        <tr>
                                                            <td>Pastora</td>
                                                            <td>Blanca</td>
                                                            <td></td>
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
                                                                        <!-- Más Información y edición -->
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
                                                        </tr>

                                                        <!-- Ejemplo: Contacto al que aún SI se le envió un mensaje -->
                                                        <tr>
                                                            <td></td>
                                                            <td>Génesis</td>
                                                            <td>Santana</td>
                                                            <td><i class="fas fa-venus"></i></td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-9">
                                                                        Ult. com. 12/9/23 <br>
                                                                        Estado: Ok <br>
                                                                        Preferencias: Se desconoce<br>
                                                                        Origen: Jóvenes2022
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <!-- Más Información y edición -->
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
                                                        </tr>

                                                        <!-- Ejemplo: Contacto en lista negra -->
                                                        <tr>
                                                            <td></td>
                                                            <td>Diego</td>
                                                            <td>Recarey</td>
                                                            <td><i class="fas fa-mars"></i></td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-9 text-danger">
                                                                        Ult. com. 12/9/23 <br>
                                                                        Estado: Lista negra <br>
                                                                        Origen: Jóvenes2022
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <!-- Más Información y edición -->
                                                                        <button href="#" class="btn btn-info btn-circle btn-sm"
                                                                        data-toggle="tooltip" data-placement="left" title="Más Información / Editar">
                                                                            <i class="fas fa-info-circle"></i>
                                                                        </button>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <!-- no se le puede enviar un mensaje -->
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
</section>
@endsection
