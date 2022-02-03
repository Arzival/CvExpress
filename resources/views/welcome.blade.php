@extends('layouts.plantilla')
@section('contenido')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1 class="titulo">CV Express</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="subtitulo">¿Qué es?</h3>
            <p class="parrafo">
                CV Express es una plataforma web que permite a los usuarios registrarse y crear sus propios curriculum vitae.
                El usuario podra descargar su curriculum en formato PDF para poder imprimirlo, guardarlo en su ordenador o enviarlo por correo electrónico.
                Crea tu curriculum de una forma simple y rapida para empezar a postularte.
            </p>
            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('login') }}">Iniciar Sesión</a>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-outline-secondary btn-lg btn-block" href="{{ route('register') }}">Registrarse</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-none d-sm-none d-md-block">
            <img class="img-cv" src="{{ asset('img/cv.svg') }}" alt="">
        </div>
    </div>
</div>
</div>
@endsection
