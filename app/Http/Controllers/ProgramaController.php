<?php

namespace App\Http\Controllers;


use carbon\Carbon;
use Illuminate\Http\Request;
use App\Programa;

use App;

class ProgramaController extends Controller
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

    public function error()
    {

        return view('error');
    }

    public function create()
    {

        // $programas = App\Programa::all();

        if (auth()->user()->rol == 'docente') {
            $programas = App\Programa::where('id', auth()->user()->programa_id)->get();
        } else {
            $programas = App\Programa::all();
        }

        // $programas = App\Programa::where('id',auth()->user()->programa_id)->get();

        return view('programas', compact('programas'));
    }
    public function creates()
    {
        $programas = App\Programa::all();
        return view('reportes.reporteprogramas', compact('programas'));
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
        $programas = App\Programa::findOrFail($id);
        $estandarprograma = App\EstandarPrograma::where('programa_id', $id)->get();
        return view('programasdetalle', compact('programas', 'estandarprograma'));
    }
    public function editare($id)
    {
        // $estandarprograma = App\EstandarPrograma::where('programa_id', 1)->get();
        $programas = App\Programa::findOrFail($id);
        $estandarprograma = App\EstandarPrograma::where('programa_id', $id)->get();
        return view('listardetalle', compact('programas', 'estandarprograma'));
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
