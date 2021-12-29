@extends('layouts.plantilla')

@section('contenido')
<h1>hola, bienvenido de regreso {{ auth()->user()->name }}</h1>
<form action="{{ route('cv.create') }}">
    <button type="submit">Crear CV</button>
</form>
@endsection
