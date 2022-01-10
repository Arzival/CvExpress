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
        <h3 class="subtitulo">Datos Académicos</h3>
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Nivel de estudios</label>
                    <select name="nivel_estudios" id="nivel_estudios" class="form-control">
                        <option value="">Seleccione un nivel</option>
                        <option value="1">Nivel 1</option>
                        <option value="2">Nivel 2</option>
                        <option value="3">Nivel 3</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Nombre de la institución</label>
                    <input class="form-control" type="text" name="nombre_institucion">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Fecha de egreso</label>
                    <input class="form-control" type="date" name="fecha_egreso">
                </div>
            </div>
        </div>
        <div class=" form-registro-cv">
            <div class="row">
                <div class="col-md-4 ">
                    <h3 class="form-group col-md-4 subtitulo">Aptitudes</h3>
                    <small class="text-small">Proactividad, Trabajo en equipo, Disciplina ...</small>
                    <div class="">
                        <div class="row">
                            <div class="form-group col-md-12 col-md-4">
                                @for ($i = 1; $i <= 5; $i++)
                                    <input class="form-control" type="text" name="{{ 'aptitud' . $i }}"
                                        placeholder="{{ 'Aptitud ' . $i }}">
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 colright">
                    <h3 class="form-group col-md-4 subtitulo">Conocimientos</h3>
                    <small class="text-small">Recuerda poner solo lo necesario para el puesto que estas
                        aplicando.</small>
                    <div class="">
                        <div class="row">
                            <div class="form-group col-md-12 col-md-4">
                                @for ($i = 1; $i <= 5; $i++)
                                    <input class="form-control" type="text" name="{{ 'conocimiento' . $i }}"
                                        placeholder="{{ 'Conocimiento ' . $i }}">
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <h3 class="form-group col-md-4 subtitulo">Idiomas</h3>
                    <small class="text-small">Se recomienda al menos poner 2 idiomas.</small>
                    <div class="">
                        <div class="row">
                            <div class="form-group col-md-12 col-md-4">
                                @for ($i = 1; $i <= 5; $i++)
                                    <input class="form-control" type="text" name="{{ 'idioma' . $i }}"
                                        placeholder="{{ 'Idioma ' . $i }}">
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="subtitulo">Experiencia Laboral</h3>
        <div class="form-registro-cv">
            @for ($i = 1; $i <= 5; $i++)
                <div class="row">
                    <div class="form-group col-md-3 col-md-2">
                        <label for="exampleInputEmail1">Empresa {{ $i }}</label>
                        <input class="form-control" type="text" name="{{ 'empresa' . $i }}">
                    </div>
                    <div class="form-group col-md-3 col-md-2">
                        <label for="exampleInputEmail1">Puesto {{ $i }}</label>
                        <input class="form-control" type="text" name="{{ 'puesto' . $i }}">
                    </div>
                    <div class="form-group col-md-3 col-md-2">
                        <label for="exampleInputEmail1">Fecha de ingreso {{ $i }}</label>
                        <input class="form-control" type="date" name="{{ 'fecha_ingreso' . $i }}">
                    </div>
                    <div class="form-group col-md-3 col-md-2">
                        <label for="exampleInputEmail1">Fecha de egreso {{ $i }}</label>
                        <input class="form-control" type="date" name="{{ 'fecha_egreso' . $i }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 col-md-4">
                        <label for="exampleInputEmail1">Descripción del puesto {{ $i }}</label>
                        <textarea class="form-control" name="{{ 'descripcion_puesto' . $i }}"></textarea>
                    </div>
                </div>
            @endfor
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection
