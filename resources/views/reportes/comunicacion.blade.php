@extends('app')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
        Reporte de campaña de comunicación
    </h1>
</div>

<section>
    <h2 class="h2 mb-2">{{ $comunicacion->nombre }}</h2>
    <h3 class="h4 mb-2">{{ $comunicacion->fecha }}</h3>
    <div class="row">
        <div class="col-lg-6 mb-4">


            @php
                $enviadosTotal = $mensajes['enviados']
                                + $mensajes['recibidos']
                                + $mensajes['respondidos'];

                if ($enviadosTotal != 0) {
                    $porcent['respondidos'] = round( $mensajes['respondidos'] * 100 / $enviadosTotal );
                } else {
                    $porcent['respondidos'] = 0;
                }
             @endphp

            <!-- Barras de progreso -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Reporte de resultados {{ ($comunicacion->activa ? 'parcial' : 'final') }} :
                        Mensajes enviados: {{ $enviadosTotal }}
                    </h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Respuestas: {{ $mensajes['respondidos'] }} <span class="float-right">{{ $porcent['respondidos'] }}%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $porcent['respondidos'] }}%"
                        aria-valuenow="{{ $porcent['respondidos'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    @if ($mensajes['respondidos'] > 0)
                        @php
                            $porcent['1'] = round( $mensajes['valoracion1'] * 100 / $mensajes['respondidos'] );
                            $porcent['0'] = round( $mensajes['valoracion0'] * 100 / $mensajes['respondidos'] );
                            $porcent['-1'] = round( $mensajes['valoracion-1'] * 100 / $mensajes['respondidos'] );
                        @endphp

                        <h4 class="small font-weight-bold">Respuetas positivas: {{ $mensajes['valoracion1'] }} <span class="float-right">{{ $porcent['1'] }}%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $porcent['1'] }}%"
                            aria-valuenow="{{ $porcent['1'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h4 class="small font-weight-bold">Respuetas neutrales: {{ $mensajes['valoracion0'] }} <span class="float-right">{{ $porcent['0'] }}%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $porcent['0'] }}%"
                            aria-valuenow="{{ $porcent['0'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h4 class="small font-weight-bold">Respuetas negativas: {{ $mensajes['valoracion-1'] }} <span class="float-right">{{ $porcent['-1'] }}%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $porcent['-1'] }}%"
                            aria-valuenow="{{ $porcent['-1'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    @endif

                </div>
            </div>


        </div>
    </div>
@endsection
