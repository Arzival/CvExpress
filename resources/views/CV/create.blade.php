@extends('layouts.plantilla')
@section('contenido')
    <h1 class="titulo">Creación de CV</h1>
    <h3 class="subtitulo">Datos Generales</h3>
    <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Estilo</label>
                    <select name="estilo" id="estilo" class="form-control">
                        <option value="">Seleccione un estilo</option>
                        <option value="1">Estilo 1</option>
                        <option value="2">Estilo 2</option>
                        <option value="3">Estilo 3</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Foto de perfil</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" name="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input class="form-control" type="text" name="apellidos">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Edad</label>
                    <input class="form-control" type="text" name="edad">
                </div>
            </div>
        </div>
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Telefono 1</label>
                    <input class="form-control" type="text" name="telefono1">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Teléfono 2</label>
                    <input class="form-control" type="text" name="telefono2">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection
