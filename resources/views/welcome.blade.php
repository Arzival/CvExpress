@extends('layouts.plantilla')

@section('contenido')
<div class="">
    <h1>vista de inicio</h1>
    <div id="example"></div>
</div>
<a href="{{ route('login') }}">Iniciar Sesion</a>
@endsection
