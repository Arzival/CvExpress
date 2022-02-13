<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cvs = CV::orderBY('id', 'desc')->where('user_id', auth()->user()->id)->simplepaginate(10);
        return view('CV.index', compact('cvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estilos = ['GalaxySlayer','Deboneir','Overdosin'];
        $niveles_estudios = ['Primaria','Secundaria','Bachillerato','Licenciatura','Maestria','Doctorado','Otro'];
        return view('CV.create', compact('estilos','niveles_estudios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'estilo' => 'required',
            'file' => "required|image|mimes:jpeg,png|max:5000",
            'nombre' => 'required|string|max:30',
            'apellidos' => 'required|string|max:60',
            'edad' => 'required|integer|max:100',
        ];
        $messages = [
            'estilo.required' => 'El campo estilo es obligatorio',
            'file.required' => 'Es necesario que subas una imagen',
            'file.image' => 'El archivo debe ser una imagen',
            'file.mimes' => 'El archivo debe ser una imagen',
            'file.max' => 'El archivo debe pesar maximo 5MB',
            'nombre.required' => 'El nombre es requerido',
            'apellidos.required' => 'Los apellidos son requeridos',
            'edad.required' => 'La edad es requerida',
        ];
        $this->validate($request, $rules, $messages);
        $foto['file'] = time() . '_' . $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/foto', $foto['file']);
        CV::create([
            'estilo' => $request['estilo'],
            'file' => $foto['file'],
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],
            'edad' => $request['edad'],
            'telefono1' => $request['telefono1'],
            'telefono2' => $request['telefono2'],
            'email' => $request['email'],
            'nivel_estudios' => $request['nivel_estudios'],
            'nombre_institucion' => $request['nombre_institucion'],
            'fecha_egreso' => $request['fecha_egreso'],
            'aptitud1' => $request['aptitud1'],
            'aptitud2' => $request['aptitud2'],
            'aptitud3' => $request['aptitud3'],
            'aptitud4' => $request['aptitud4'],
            'aptitud5' => $request['aptitud5'],
            'conocimiento1' => $request['conocimiento1'],
            'conocimiento2' => $request['conocimiento2'],
            'conocimiento3' => $request['conocimiento3'],
            'conocimiento4' => $request['conocimiento4'],
            'conocimiento5' => $request['conocimiento5'],
            'idioma1' => $request['idioma1'],
            'idioma2' => $request['idioma2'],
            'idioma3' => $request['idioma3'],
            'idioma4' => $request['idioma4'],
            'idioma5' => $request['idioma5'],
            'empresa1' => $request['empresa1'],
            'puesto1' => $request['puesto1'],
            'fecha_ingreso1' => $request['fecha_ingreso1'],
            'fecha_egreso1' => $request['fecha_egreso1'],
            'descripcion_puesto1' => $request['descripcion_puesto1'],
            'empresa2' => $request['empresa2'],
            'puesto2' => $request['puesto2'],
            'fecha_ingreso2' => $request['fecha_ingreso2'],
            'fecha_egreso2' => $request['fecha_egreso2'],
            'descripcion_puesto2' => $request['descripcion_puesto2'],
            'empresa3' => $request['empresa3'],
            'puesto3' => $request['puesto3'],
            'fecha_ingreso3' => $request['fecha_ingreso3'],
            'fecha_egreso3' => $request['fecha_egreso3'],
            'descripcion_puesto3' => $request['descripcion_puesto3'],
            'empresa4' => $request['empresa4'],
            'puesto4' => $request['puesto4'],
            'fecha_ingreso4' => $request['fecha_ingreso4'],
            'fecha_egreso4' => $request['fecha_egreso4'],
            'descripcion_puesto4' => $request['descripcion_puesto4'],
            'empresa5' => $request['empresa5'],
            'puesto5' => $request['puesto5'],
            'fecha_ingreso5' => $request['fecha_ingreso5'],
            'fecha_egreso5' => $request['fecha_egreso5'],
            'descripcion_puesto5' => $request['descripcion_puesto5'],

            'user_id' => auth()->user()->id,
        ]);
        
        return redirect()->route('cv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function show(CV $cv)
    {
        $estilo = $cv->estilo;
        $pdf = PDF::loadView('PDF.debonair', compact('cv'));
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function edit(CV $cv)
    {
        $estilos = ['GalaxySlayer','Deboneir','Overdosin'];
        $niveles_estudios = ['Primaria','Secundaria','Bachillerato','Licenciatura','Maestria','Doctorado'];
        return view('cv.edit', compact('cv','estilos','niveles_estudios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CV $cv)
    {
        if($request->hasFile('file')){
            $foto['file'] = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/foto', $foto['file']);
            CV::where('id',$cv->id)->update([
                'file' => $foto['file'],
            ]);
        }
        CV::where('id',$cv->id)->update([
            'estilo' => $request['estilo'],
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],
            'edad' => $request['edad'],
            'telefono1' => $request['telefono1'],
            'telefono2' => $request['telefono2'],
            'email' => $request['email'],
            'nivel_estudios' => $request['nivel_estudios'],
            'nombre_institucion' => $request['nombre_institucion'],
            'fecha_egreso' => $request['fecha_egreso'],
            'aptitud1' => $request['aptitud1'],
            'aptitud2' => $request['aptitud2'],
            'aptitud3' => $request['aptitud3'],
            'aptitud4' => $request['aptitud4'],
            'aptitud5' => $request['aptitud5'],
            'conocimiento1' => $request['conocimiento1'],
            'conocimiento2' => $request['conocimiento2'],
            'conocimiento3' => $request['conocimiento3'],
            'conocimiento4' => $request['conocimiento4'],
            'conocimiento5' => $request['conocimiento5'],
            'idioma1' => $request['idioma1'],
            'idioma2' => $request['idioma2'],
            'idioma3' => $request['idioma3'],
            'idioma4' => $request['idioma4'],
            'idioma5' => $request['idioma5'],
            'empresa1' => $request['empresa1'],
            'puesto1' => $request['puesto1'],
            'fecha_ingreso1' => $request['fecha_ingreso1'],
            'fecha_egreso1' => $request['fecha_egreso1'],
            'descripcion_puesto1' => $request['descripcion_puesto1'],
            'empresa2' => $request['empresa2'],
            'puesto2' => $request['puesto2'],
            'fecha_ingreso2' => $request['fecha_ingreso2'],
            'fecha_egreso2' => $request['fecha_egreso2'],
            'descripcion_puesto2' => $request['descripcion_puesto2'],
            'empresa3' => $request['empresa3'],
            'puesto3' => $request['puesto3'],
            'fecha_ingreso3' => $request['fecha_ingreso3'],
            'fecha_egreso3' => $request['fecha_egreso3'],
            'descripcion_puesto3' => $request['descripcion_puesto3'],
            'empresa4' => $request['empresa4'],
            'puesto4' => $request['puesto4'],
            'fecha_ingreso4' => $request['fecha_ingreso4'],
            'fecha_egreso4' => $request['fecha_egreso4'],
            'descripcion_puesto4' => $request['descripcion_puesto4'],
            'empresa5' => $request['empresa5'],
            'puesto5' => $request['puesto5'],
            'fecha_ingreso5' => $request['fecha_ingreso5'],
            'fecha_egreso5' => $request['fecha_egreso5'],
            'descripcion_puesto5' => $request['descripcion_puesto5'],
        ]);
        return redirect()->route('cv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function destroy(CV $cv)
    {
        CV::destroy($cv->id);
        return redirect()->route('cv.index');
    }
}
