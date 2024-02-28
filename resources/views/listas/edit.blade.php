@extends('app')

@section('titulo')
    Editar Lista
@endsection

@section('content')
    <section>
        <h2 class="h4 text-weight-bold">Editar Lista</h2>

        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Lista {{ $lista->numero }} - {{ $lista->departamental() ? $lista->departamento->nombre : 'NACIONAL' }}
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('listas.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $lista->id }}">

                        <div class="form-group">
                            <label for="lema">Lema</label>
                            <input type="text" name="lema" id="lema" class="form-control" value="{{ $lista->lema }}" readonly>
                        </div>

                        <!--div class="form-group">
                            <label for="sublema">Sublema</label>
                            <input type="text" name="sublema" id="sublema" class="form-control" value="{{ $lista->sublema }}">
                        </div-->

                        <div class="form-group">
                            <label for="agrupacion">Agrupación</label>
                            <input type="text" name="agrupacion" id="agrupacion" class="form-control" value="{{ $lista->agrupacion }}">
                        </div>

                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="number" min="1" step="1" name="numero" id="numero" class="form-control" value="{{ $lista->numero }}" readonly autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="departamento_id">Departamento</label>
                            <select name="departamento_id" id="departamento_id" class="form-control" readonly disabled>
                                <option value="">NACIONAL</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}" {{ $lista->departamento_id == $departamento->id ? 'selected' : '' }}>{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="estado_del_numero">Estado del número</label>
                            <select name="estado_del_numero" id="estado_del_numero" class="form-control">
                                <option value="Solicitado" {{ $lista->estado_del_numero == 'Solicitado' ? 'selected' : '' }}>Solicitado</option>
                                <option value="Concedido" {{ $lista->estado_del_numero == 'Concedido' ? 'selected' : '' }}>Concedido</option>
                                <option value="Rechazado" {{ $lista->estado_del_numero == 'Rechazado' ? 'selected' : '' }}>Rechazado</option>
                                <option value="Renunciado" {{ $lista->estado_del_numero == 'Renunciado' ? 'selected' : '' }}>Renunciado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="notas">Notas</label>
                            <textarea name="notas" id="notas" class="form-control">{{ $lista->notas }}</textarea>
                        </div>

                        <div class="row">
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

    </section>
@endsection
