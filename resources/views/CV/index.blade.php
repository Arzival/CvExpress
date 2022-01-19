@extends('layouts.plantilla')

@section('contenido')

<h1>hola, bienvenido {{ auth()->user()->name }}</h1>
<form action="{{ route('cv.create') }}">
    <button class="btn btn-primary" type="submit">Crear CV</button>
</form>

<a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i> Salir</a>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>estilo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cvs as $cv)
        <tr>
            <td>{{ $cv->nombre }}</td>
            <td>{{ $cv->estilo }}</td>
            <td>
                <form action="{{ route('cv.destroy', $cv->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                <a class="btn btn-warning" href="{{ route('cv.edit', $cv->id) }}">Editar</a>
                <a class="btn btn-info" href="{{ route('cv.show', $cv->id) }}">Ver PDF</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $cvs->links() }}
@endsection

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>