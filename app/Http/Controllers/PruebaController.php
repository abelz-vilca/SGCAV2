<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

use App\Dimension;

use App\EstandarPrograma;
use App\CriterioEstandar;
use app\User;
use Carbon\Carbon;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    ///PROBANDO SUMACRITERIOS
    public function sumacriterio()
    {
        // $categorias = App\CriterioEstandar::where('estandar_id', 1)->get()->sum('calificacion');
        // if (auth()->user()->rol == 'docente') {
        //     $programas = App\Programa::where('id', auth()->user()->programa_id)->get();
        // } else {
        //     $programas = App\Programa::all();
        // }
        $estandar01 = App\CriterioEstandar::where('programa_id', '=', 1)
            ->whereBetween('criterio_id', array(1, 3))->get()->sum('calificacion');

        $E1 = round(((10) * $estandar01) / 3);

        return view('reportes.sumaestandar', compact('estandar01', 'E1'));
    }


    public function subirArchivo()
    {
        $pruebas = App\Prueba::all();

        return view('PRUEBAS.formulario', compact('pruebas'));
    }
    public function grafic()
    {

        return view('PRUEBAS.grafico2');
    }
    public function grafic2()
    {


        return view('PRUEBAS.graficos');
    }
    public function editarestandar()
    {


        return view('CRITERIOS.calificarcriterio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $notaNueva = new App\Prueba;
        //obtenemos el campo file definido en el formulario
        // $file = $request->file('archivo');

        //obtenemos el nombre del archivo
        // $nombre = Carbon::now()->second . $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        // \Storage::disk('local')->put($nombre,  \File::get($file));

        // $archivo = $request->file('archivo');
        // $nombre = time() . $archivo->getClientOriginalName();
        // $request->file('archivo')->store('public');

        // $notaNueva = new App\Prueba;
        $notaNueva->archivo =  $request->file('archivo')->store('public/prueba');
        $notaNueva->estandares_id = $request->estandares_id;
        $notaNueva->programas_id = $request->programas_id;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota agregada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
