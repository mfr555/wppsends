@extends('app')

@section('titulo')
    Listas
@endsection

@section('content')
    <section>
        <h2 class="h4 text-weight-bold">Listas</h2>

        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Números de listas
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Departamento</th>
                                    <th>Número</th>
                                    <th>Estado del número</th>
                                    <th>Agrupación</th>
                                    <th>Notas</th>
                                    <th>Actualiz.</th>
                                    <th>
                                        <i class="fas fa-toolbox"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listas as $lista)
                                    <tr>
                                        <td>
                                            @if($lista->departamental())
                                                {{ $lista->departamento->nombre }}
                                            @else
                                                NACIONAL
                                            @endif
                                        </td>
                                        <td>{{ $lista->numero }}</td>
                                        <td>
                                            {{ $lista->estado_del_numero }}
                                            @if ($lista->estado_del_numero == 'Concedido')
                                                <i class="fas fa-check-circle text-success"></i>
                                            @elseif ($lista->estado_del_numero == 'Rechazado' || $lista->estado_del_numero == 'Renunciado')
                                                <i class="fas fa-times-circle text-danger"></i>
                                            @endif
                                        </td>
                                        <td>{{ $lista->agrupacion }}</td>
                                        <td>{{ $lista->notas }}</td>
                                        <td><small>{{ $lista->updated_at->diffForHumans() }}</small></td>
                                        <td>
                                            <a href="{{ route('listas.edit', $lista->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
