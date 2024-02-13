@extends('app')

@section('titulo')
    {{ $user->name }}
@endsection

@section('content')
<section>
    <h1 class="h3 mb-2 text-gray-800">{{ $user->name }}</h1>

    <div class="row">
        <div class="col-md-6 col-12">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Detalles de usuario
                    </h6>

                </div>
                <div class="card-body">

                    <ul>
                        <li><strong>Nombre: </strong>{{ $user->name }}</li>
                        <li><strong>Username: </strong>{{ $user->username }}</li>
                        <li><strong>Email: </strong>{{ $user->email }}</li>
                        @isset($user->updated_at)
                            <li><strong>Fecha de actualización: </strong>{{ $user->updated_at->format('d/m/Y') }}</li>
                        @endisset
                    </ul>

                    {{-- Cambiar contraseña --}}
                    @if (Auth::user()->id == $user->id)
                        <form action="{{ route('user-update-password', $user->id) }}" method="POST">
                            @csrf
                            <label class="m-1">Cambiar contraseña</label>
                            <input class="form-control m-1" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
                            <input class="form-control m-1" type="password" name="password" id="password" placeholder="Nueva contraseña">
                            <button class="btn btn-primary m-1" type="submit">Cambiar contraseña</button>
                        </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
