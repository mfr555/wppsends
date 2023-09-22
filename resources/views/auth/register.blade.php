@extends('layouts.auth-master')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Registrar mi usuario de <span>Plan País</span></h1>
                    </div>
                    <form action="/register" method="POST" class="user">
                        @csrf

                        @include('layouts.partials.messages')

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="name" placeholder="Nombre">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="username"
                                placeholder="Usuario, por ejemplo: juan123" value="{{ isset($_GET['usuario']) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" placeholder="email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Verificar Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Registar mi usuario
                        </button>
                    </form>
                    <hr>
                    <!--div class="text-center">
                        <a class="small" href="#">Olvidé mi contraseña</a>
                    </div-->
                    <div class="text-center">
                        <a class="small" href="login">Tengo una cuenta, loguearme</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
