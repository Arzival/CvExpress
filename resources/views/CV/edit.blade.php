@extends('layouts.plantilla')
@section('contenido')
<div class="container">
    <h1 class="titulo">Edición de CV</h1>
    <div class="form-registro-cv col-md-12 col-md-4 button-rigth">
        <a href="{{ route('home') }}"><button class="btn btn-secondary btn-lg btn-block">Regresar</button></a>
    </div>
    <h3 class="subtitulo">Datos Generales</h3>
    <form action="{{ route('cv.update',$cv) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PATCH')
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Estilo</label>
                    <select name="estilo" id="estilo" class="form-control">
                        <option selected value="">Seleccione un estilo</option>
                        @foreach ($estilos as $estilo)
                            <option {{ $cv->estilo == $estilo ? 'selected' : '' }} value="{{ $estilo }}">{{ $estilo }}</option>

                        @endforeach
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
                    <input class="form-control" type="text" name="nombre" value="{{ $cv->nombre ? $cv->nombre : '' }}">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input class="form-control" type="text" name="apellidos" value=" {{ $cv->apellidos ? $cv->apellidos : '' }}">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Edad</label>
                    <input class="form-control" type="text" name="edad" value="{{ $cv->edad ? $cv->edad : '' }}">
                </div>
            </div>
        </div>
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Telefono 1</label>
                    <input class="form-control" type="text" name="telefono1" value="{{ $cv->telefono1 ? $cv->telefono1 : '' }}">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Teléfono 2</label>
                    <input class="form-control" type="text" name="telefono2"
                    value="{{ $cv->telefono2 ? $cv->telefono2 : '' }}">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" type="text" name="email" value="{{ $cv->email ? $cv->email : '' }}">
                </div>
            </div>
        </div>
        <h3 class="subtitulo">Datos Académicos</h3>
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Nivel de estudios</label>
                    <select name="nivel_estudios" id="nivel_estudios" class="form-control">
                        <option selected value="">Seleccione un nivel</option>
                        @foreach ($niveles_estudios as $nivel_estudio)
                            <option {{ $cv->nivel_estudios == $nivel_estudio ? 'selected' : '' }} value="{{ $nivel_estudio }}">{{ $nivel_estudio }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Nombre de la institución</label>
                    <input class="form-control" type="text" name="nombre_institucion" value="{{ $cv->nombre_institucion ? $cv->nombre_institucion : '' }}">
                </div>
                <div class="form-group col-md-4 col-md-2">
                    <label for="exampleInputEmail1">Fecha de egreso</label>
                    <input class="form-control" type="date" name="fecha_egreso" value="{{ $cv->fecha_egreso ? $cv->fecha_egreso : '' }}">
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
                                <input class="form-control" type="text" name="aptitud1" value="{{ $cv->aptitud1 ? $cv->aptitud1 : '' }}" placeholder="Aptitud 1">
                                <input class="form-control" type="text" name="aptitud2" value="{{ $cv->aptitud2 ? $cv->aptitud2 : '' }}" placeholder="Aptitud 2">
                                <input class="form-control" type="text" name="aptitud3" value="{{ $cv->aptitud3 ? $cv->aptitud3 : '' }}" placeholder="Aptitud 3">
                                <input class="form-control" type="text" name="aptitud4" value="{{ $cv->aptitud4 ? $cv->aptitud4 : '' }}" placeholder="Aptitud 4">
                                <input class="form-control" type="text" name="aptitud5" value="{{ $cv->aptitud5 ? $cv->aptitud5 : '' }}" placeholder="Aptitud 5">
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
                                <input class="form-control" type="text" name="conocimiento1" value="{{ $cv->conocimiento1 ? $cv->conocimiento1 : '' }}" placeholder="Conocimiento 1">
                                <input class="form-control" type="text" name="conocimiento2" value="{{ $cv->conocimiento2 ? $cv->conocimiento2 : '' }}" placeholder="Conocimiento 2">
                                <input class="form-control" type="text" name="conocimiento3" value="{{ $cv->conocimiento3 ? $cv->conocimiento3 : '' }}" placeholder="Conocimiento 3">
                                <input class="form-control" type="text" name="conocimiento4" value="{{ $cv->conocimiento4 ? $cv->conocimiento4 : '' }}" placeholder="Conocimiento 4">
                                <input class="form-control" type="text" name="conocimiento5" value="{{ $cv->conocimiento5 ? $cv->conocimiento5 : '' }}" placeholder="Conocimiento 5">
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
                                <input class="form-control" type="text" name="idioma1" value="{{ $cv->idioma1 ? $cv->idioma1 : '' }}" placeholder="Idioma 1">
                                <input class="form-control" type="text" name="idioma2" value="{{ $cv->idioma2 ? $cv->idioma2 : '' }}" placeholder="Idioma 2">
                                <input class="form-control" type="text" name="idioma3" value="{{ $cv->idioma3 ? $cv->idioma3 : '' }}" placeholder="Idioma 3">
                                <input class="form-control" type="text" name="idioma4" value="{{ $cv->idioma4 ? $cv->idioma4 : '' }}" placeholder="Idioma 4">
                                <input class="form-control" type="text" name="idioma5" value="{{ $cv->idioma5 ? $cv->idioma5 : '' }}" placeholder="Idioma 5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="subtitulo">Experiencia Laboral</h3>
        <div class="form-registro-cv">
            <div class="row">
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Empresa 1</label>
                    <input class="form-control" type="text" name="empresa" value={{ $cv->empresa1 ? $cv->empresa1 : '' }}>
                </div>
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Puesto 1</label>
                    <input class="form-control" type="text" name="puesto1" value={{ $cv->puesto1 ? $cv->puesto1 : '' }}>
                </div>
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Fecha de ingreso 1</label>
                    <input class="form-control" type="date" name="fecha_ingreso1" value={{ $cv->fecha_ingreso1 ? $cv->fecha_ingreso1 : '' }}>
                </div>
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Fecha de egreso 1</label>
                    <input class="form-control" type="date" name="fecha_egreso1" value={{ $cv->fecha_egreso1 ? $cv->fecha_egreso1 : '' }}>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 col-md-4">
                    <label for="exampleInputEmail1">Descripción del puesto 1</label>
                    <textarea class="form-control" name="descripcion_puesto1">{{ $cv->descripcion_puesto1 ? $cv->descripcion_puesto1 : '' }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Empresa 2</label>
                    <input class="form-control" type="text" name="empresa2" value={{ $cv->empresa2 ? $cv->empresa2 : '' }}>
                </div>
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Puesto 2</label>
                    <input class="form-control" type="text" name="puesto2" value={{ $cv->puesto2 ? $cv->puesto2 : '' }}>
                </div>
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Fecha de ingreso 2</label>
                    <input class="form-control" type="date" name="fecha_ingreso2" value={{ $cv->fecha_ingreso2 ? $cv->fecha_ingreso2 : '' }}>
                </div>
                <div class="form-group col-md-3 col-md-2">
                    <label for="exampleInputEmail1">Fecha de egreso 2</label>
                    <input class="form-control" type="date" name="fecha_egreso2" value={{ $cv->fecha_egreso2 ? $cv->fecha_egreso2 : '' }}>
                </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 col-md-4">
                <label for="exampleInputEmail1">Descripción del puesto 2</label>
                <textarea class="form-control" name="descripcion_puesto2">{{ $cv->descripcion_puesto2 ? $cv->descripcion_puesto2 : '' }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Empresa 3</label>
                <input class="form-control" type="text" name="empresa3" value={{ $cv->empresa3 ? $cv->empresa3 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Puesto 3</label>
                <input class="form-control" type="text" name="puesto3" value={{ $cv->puesto3 ? $cv->puesto3 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Fecha de ingreso 3</label>
                <input class="form-control" type="date" name="fecha_ingreso3" value={{ $cv->fecha_ingreso3 ? $cv->fecha_ingreso3 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Fecha de egreso 3</label>
                <input class="form-control" type="date" name="fecha_egreso3" value={{ $cv->fecha_egreso3 ? $cv->fecha_egreso3 : '' }}>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 col-md-4">
                <label for="exampleInputEmail1">Descripción del puesto 3</label>
                <textarea class="form-control" name="descripcion_puesto3">{{ $cv->descripcion_puesto3 ? $cv->descripcion_puesto3 : '' }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Empresa 4</label>
                <input class="form-control" type="text" name="empresa4" value={{ $cv->empresa4 ? $cv->empresa4 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Puesto 4</label>
                <input class="form-control" type="text" name="puesto4" value={{ $cv->puesto4 ? $cv->puesto4 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Fecha de ingreso 4</label>
                <input class="form-control" type="date" name="fecha_ingreso4" value={{ $cv->fecha_ingreso4 ? $cv->fecha_ingreso4 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Fecha de egreso 4</label>
                <input class="form-control" type="date" name="fecha_egreso4" value={{ $cv->fecha_egreso4 ? $cv->fecha_egreso4 : '' }}>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 col-md-4">
                <label for="exampleInputEmail1">Descripción del puesto 4</label>
                <textarea class="form-control" name="descripcion_puesto4">{{ $cv->descripcion_puesto4 ? $cv->descripcion_puesto4 : '' }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Empresa 5</label>
                <input class="form-control" type="text" name="empresa5" value={{ $cv->empresa5 ? $cv->empresa5 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Puesto 5</label>
                <input class="form-control" type="text" name="puesto5" value={{ $cv->puesto5 ? $cv->puesto5 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Fecha de ingreso 5</label>
                <input class="form-control" type="date" name="fecha_ingreso5" value={{ $cv->fecha_ingreso5 ? $cv->fecha_ingreso5 : '' }}>
            </div>
            <div class="form-group col-md-3 col-md-2">
                <label for="exampleInputEmail1">Fecha de egreso 5</label>
                <input class="form-control" type="date" name="fecha_egreso5" value={{ $cv->fecha_egreso5 ? $cv->fecha_egreso5 : '' }}>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12 col-md-4">
                <label for="exampleInputEmail1">Descripción del puesto 5</label>
                <textarea class="form-control" name="descripcion_puesto5">{{ $cv->descripcion_puesto5 ? $cv->descripcion_puesto5 : '' }}</textarea>
            </div>
        </div>
        <div class="form-registro-cv col-md-12 col-md-4 button-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Datos</button>
        </div>
    </form>
</div>
@endsection
