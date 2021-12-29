@extends('layouts.plantilla')
@section('contenido')
<h1>hola desde la pagina de creacion de cv</h1>
<form action="{{route('cv.store')}}" method="POST">
@csrf
<input type="text" name="nombre" placeholder="nombre">
<input type="text" name="apellido" placeholder="apellido">
<input type="text" name="edad" placeholder="edad">
<button type="submit" >Guardar</button>
</form>
@endsection