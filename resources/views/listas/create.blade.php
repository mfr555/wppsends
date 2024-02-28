@extends('app')

@section('titulo')
    Nueva Lista
@endsection

@section('content')
    <section>
        <h2 class="h4 text-weight-bold">Nueva Lista</h2>

        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Nueva lista
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('listas.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="lema">Lema</label>
                            <input type="text" name="lema" id="lema" class="form-control" value="PARTIDO NACIONAL" required>
                        </div>

                        <!--div class="form-group">
                            <label for="sublema">Sublema</label>
                            <input type="text" name="sublema" id="sublema" class="form-control">
                        </div-->

                        <div class="form-group">
                            <label for="agrupacion">Agrupación</label>
                            <input type="text" name="agrupacion" id="agrupacion" class="form-control" value="PLAN PAIS" required>
                        </div>

                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="number" min="1" step="1" name="numero" id="numero" class="form-control" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="departamento_id">Departamento</label>
                            <select name="departamento_id" id="departamento_id" class="form-control">
                                <option value="">NACIONAL</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="estado_del_numero">Estado del número</label>
                            <select name="estado_del_numero" id="estado_del_numero" class="form-control" required>
                                <option value="Solicitado" selected>Solicitado</option>
                                <option value="Concedido">Concedido</option>
                                <option value="Rechazado">Rechazado</option>
                                <option value="Renunciado">Renunciado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="notas">Notas</label>
                            <textarea name="notas" id="notas" class="form-control"></textarea>
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
