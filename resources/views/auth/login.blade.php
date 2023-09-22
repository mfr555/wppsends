@extends('layouts.auth-master')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-4">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                        </div>
                        <form class="user" action="/login" method="POST" >
                            @csrf

                            @include('layouts.partials.messages')

                            <div class="form-group">
                                <input type="username" class="form-control form-control-user" name="username" placeholder="Usuario / email"
                                    value="{{ Request::get('username') }}"  >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                            </div>
                            <!--div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">
                                        Recuérdame
                                    </label>
                                </div>
                            </div-->
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>

                        </form>
                        <!--hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Olvidé mi contraseña</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="register">Necesito una cuenta</a>
                        </div-->
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
