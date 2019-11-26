<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use carbon\Carbon;
use App\Estandar;
use App\Criterio;
use App\CriterioEstandar;
use App;

class CriterioEstandarController extends Controller
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
    public function showcriterio($programa_id)
    {
        // $devolverisprograma = App\EstandarPrograma::findOrFail($programa_id);
        $showlistacriterio = App\CriterioEstandar::where('programa_id', $programa_id)->get();

        return view('CRITERIOS.criterio_estandar_editar', compact('showlistacriterio'));
    }
    public function showcriterioid($criterio_id)
    {
        // $devolverisprograma = App\EstandarPrograma::findOrFail($programa_id);
        $showlistacriterioid = App\CriterioEstandar::where('programa_id', $criterio_id)->get();

        return view('CRITERIOS.criterio_estandar_editar2', compact('showlistacriterioid'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criterio_estandar = App\CriterioEstandar::all();
        return view('CRITERIOS.criterio_estandar_programa', compact('criterio_estandar'));
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
    public function editar($id)
    {
        $criterioestandar = App\CriterioEstandar::findOrFail($id);

        return view('programas.editar', compact('devolverisprograma'));
    }
    public function editarcriterio($id)
    {
        $editarcriterio = App\CriterioEstandar::findOrFail($id);
        $criterionombre1 = App\Criterio::all();
        $criterionombre = App\Criterio::where('id', $id)->get();
        return view('CRITERIOS.calificarcriterio', compact('editarcriterio', 'criterionombre1', 'criterionombre'));
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


        $request->validate([
            'calificacion' => 'required',
            'justificacion' => 'required'
        ]);

        $criterioupdate = App\CriterioEstandar::findOrFail($id);
        $criterioupdate->calificacion = $request->calificacion;
        $criterioupdate->justificacion = $request->justificacion;
        // $criterioupdate->descripcion = $request->descripcion;
        $criterioupdate->fecha = Carbon::now();

        $criterioupdate->save();
        return back()->with('mensaje', 'Calificacion actualizada');
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
