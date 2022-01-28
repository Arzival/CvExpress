@extends('layouts.plantilla')

@section('contenido')

   <div class="container">
    <h1>hola, bienvenido {{ auth()->user()->name }}</h1>
    <form action="{{ route('cv.create') }}">
        <button class="btn btn-primary" type="submit">Crear CV</button>
    </form>

    <a class="nav-link btn btn-outline-danger" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Salir</a>

    <div class="table-responsive tablaUsuarios">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Estilo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cvs as $cv)
                    <tr>
                        <td>{{ $cv->nombre }}</td>
                        <td>{{ $cv->apellidos }}</td>
                        <td>{{ $cv->estilo }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <form action="{{ route('cv.destroy', $cv->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <form action="">
                                        <a class="btn btn-warning" href="{{ route('cv.edit', $cv->id) }}">Editar</a>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <form action=""><a target="_blank" class="btn btn-info"
                                            href="{{ route('cv.show', $cv->id) }}">PDF</a></form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $cvs->links() }}
   </div>
@endsection

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
