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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function devolverprograma($programa_id)
    {

        $devolverprograma = App\CriterioEstandar::where('programa_id', $programa_id)->get();

        return view('CRITERIOS.criterio_estandar_editar', compact('devolverprograma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
        $devolverisprograma = App\CriterioEstandar::findOrFail($id);

        return view('CRITERIOS.calificarcriterio', compact('devolverisprograma'));
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
    public function updates(Request $request, $id)
    {


        $request->validate([
            'archivo' => 'required',
            'calificacion' => 'required',
            'justificacion' => 'required',

        ]);
        $criterioupdate = App\CriterioEstandar::findOrFail($id);

        if ($request->hasFile('archivo')) {
            $criterioupdate->archivo = $request->file('archivo')->store('public/Criterios');
        }
        $criterioupdate->calificacion = $request->calificacion;
        $criterioupdate->justificacion = $request->justificacion;
        // $criterioupdate->descripcion = $request->descripcion;
        $criterioupdate->fecha = Carbon::now();

        $criterioupdate->save();
        return back()->with('mensaje', 'Calificacion actualizada');
    }
    public function store(Request $request)
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
