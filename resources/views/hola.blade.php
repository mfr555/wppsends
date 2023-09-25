@extends('app')

@section('content')
<!-- Page Heading -->

<?php
function obtenerMensajeDeBienvenidaRandom() {
    $mensajes = [
        "¡Bienvenido a la app de Plan País!",
        "Estamos encantados de tenerte aquí otra vez",
        "Bienvenido, ¡Empieza a explorar y haz que las cosas sucedan!",
        "Bienvenido, descubre la simplicidad de la app de Plan País",
    ];

    // Obtener un mensaje aleatorio
    $mensajeRandom = $mensajes[array_rand($mensajes)];

    return $mensajeRandom;
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 text-weight-bold">
        {{ obtenerMensajeDeBienvenidaRandom() }}
    </h1>
    <a href="/contactos" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i>
        Agregar personas
    </a>
</div>
@endsection
