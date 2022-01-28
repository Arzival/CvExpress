@extends('layouts.plantilla')
@section('contenido')
<div class="container">
<div class="row">
    <h1>vista de inicio</h1>
    <a href="{{ route('login') }}">Iniciar Sesion</a>
</div>
</div>
@endsection
