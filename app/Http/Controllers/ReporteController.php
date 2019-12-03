<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use DB;
use App\Dimension;
use App\Docente;
use App\EstandarPrograma;
use App\CriterioEstandar;
use app\User;
use Carbon\Carbon;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function reportestandar()
    {

        $e01 = App\CriterioEstandar::where('programa_id', '=', 1)
            ->whereBetween('criterio_id', array(1, 3))->get()->sum('calificacion');
        $e1 = round(((10) * $e01) / 3);

        $e02 = App\CriterioEstandar::where('programa_id', '=', 2)
            ->whereBetween('criterio_id', array(4, 4))->get()->sum('calificacion');
        $e2 = round(((10) * $e01) / 3);

        return view('reportes.sumaestandar', compact('e01', 'e1'));
    }
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
