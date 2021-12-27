@extends('layouts.plantilla')

@section('contenido')
<h1>hola, bienvenido de regreso {{ auth()->user()->name }}</h1>
@endsection
