@extends('app')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
        Base de datos
    </h1>
</div>

<h2 class="h2 mb-2">{{ ($contacto->tratamiento.' '.$contacto->nombre.' '.$contacto->apellido) }}</h2>

<section id="datos">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Datos del contacto</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('contacto-editar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $contacto->id }}">
                        @if ($contacto->lista_negra)
                            <p class="bg-gradient-danger text-light p-2 rounded">Este contacto se encuentra en la lista negra y no se le pueden enviar mensajes</p>
                        @endif
                        <div class="row mb-2">
                            <div class="col-2">
                                <label for="tratamiento">Trat.</label>
                                <input type="text" class="form-control" id="tratamiento" name="tratamiento"
                                value="{{ $contacto->tratamiento }}">
                            </div>
                            <div class="col">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required
                                value="{{ $contacto->nombre }}">
                            </div>
                            <div class="col">
                                <label for="apellido">Apellido</label>
                                <input type="text" id="apellido" name="apellido" class="form-control"
                                vlaue="{{ $contacto->apellido }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cel">Celular</label>
                            <input type="text" class="form-control" id="cel" name="cel" required
                            value={{ $contacto->cel }}>
                        </div>
                        <div class="form-group">
                            <label for="email">e-mail</label>
                            <input type="email" class="form-control" id="email" name="email"
                            value="{{ $contacto->email }}">
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <select class="custom-select" id="departamento" name="departamento_id">
                                <option
                                    @if(!isset($contacto->departamento_id))
                                        selected
                                    @endisset
                                ></option>
                                @foreach ($deptos as $departamento)
                                    <option value="{{ $departamento->id }}"
                                        @if(isset($contacto->departamento_id) && $contacto->departamento_id==$departamento->id)
                                            selected
                                        @endisset
                                    >{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <textarea id="comentarios" name="comentarios" rows="3" class="form-control"
                                     value="{{ $contacto->comentarios }}" placeholder="Comentarios adicionales"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-auto">
                                    <label for="origen">Origen del contacto</label>
                                </div>
                                <div class="col">
                                    <select class="custom-select" id="origen" name="origen_id" required>
                                        <option
                                            @if(!isset($contacto->origen_id))
                                                selected
                                            @endisset
                                        ></option>
                                        @foreach ($origenes as $origen)
                                            @if ($origen->user_id == Auth::user()->id)
                                                <option value="{{ $origen->id }}"
                                                    @if(isset($contacto->origen_id) && $contacto->origen_id==$origen->id)
                                                        selected
                                                    @endisset
                                                 >Mis contactos</option>
                                            @else
                                            <option value="{{ $origen->id }}"
                                                @if(isset($contacto->origen_id) && $contacto->origen_id==$origen->id)
                                                    selected
                                                @endisset
                                            >{{ $origen->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox text-danger col-6 bg-gray-300 rounded pt-1 pb-1 mb-3">
                            <input type="checkbox" class="custom-control-input" id="lista_negra" name="lista_negra" value="1"
                            @if ($contacto->lista_negra)
                                checked
                            @endif
                            >
                            <label class="custom-control-label" for="lista_negra">Lista negra</label>
                          </div>
                        @isset($contacto->updated_at)
                            <div class="form-group">
                                <label for="update">
                                    Ultima actualización: {{ $contacto->updated_at->format('d/m/Y') }}
                                </label>
                            </div>
                        @endisset
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
