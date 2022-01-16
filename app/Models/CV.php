<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $fillable = [
        'estilo',
        'file',
        'nombre',
        'apellidos',
        'edad',
        'telefono1',
        'telefono2',
        'email',
        'nivel_estudios',
        'nombre_institucion',
        'fecha_egreso',
        'aptitud1',
        'aptitud2',
        'aptitud3',
        'aptitud4',
        'aptitud5',
        'conocimiento1',
        'conocimiento2',
        'conocimiento3',
        'conocimiento4',
        'conocimiento5',
        'idioma1',
        'idioma2',
        'idioma3',
        'idioma4',
        'idioma5',
        'empresa1',
        'puesto1',
        'fecha_ingreso1',
        'fecha_egreso1',
        'descripcion_puesto1',
        'empresa2',
        'puesto2',
        'fecha_ingreso2',
        'fecha_egreso2',
        'descripcion_puesto2',
        'empresa3',
        'puesto3',
        'fecha_ingreso3',
        'fecha_egreso3',
        'descripcion_puesto3',
        'empresa4',
        'puesto4',
        'fecha_ingreso4',
        'fecha_egreso4',
        'descripcion_puesto4',
        'empresa5',
        'puesto5',
        'fecha_ingreso5',
        'fecha_egreso5',
        'descripcion_puesto5',
        'user_id',
    ];
}
