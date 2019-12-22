<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use carbon\Carbon;
use Illuminate\Http\Request;

use App;

class EstandarProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function tanexo(){
        
        $tanexo=App\Anexoestandar::all();
        return view('Estandares.totalAnexo',compact('tanexo','programas'));
    }
    public function anexo($estandar_id)
    {
        $estandarid = App\EstandarPrograma::findOrFail($estandar_id);
        $programa = App\Anexoestandar::where('anexoep_id', $estandar_id)->get();
       
       
        return view('Estandares.Anexo', compact('estandarid', 'programa'));
    }
    public function anexos(Request $request)
    {
        $request->validate([

            'archivoae' => 'required',
            'Descripcion' => 'required'

        ]);
        $anexooupdate = new App\Anexoestandar;
        // $docsoupdate = App\Docs::findOrFail($id);

        if ($request->hasFile('archivoae')) {
            $anexooupdate->archivoae = $request->file('archivoae')->store('public/Anexos');
        }
        $anexooupdate->Descripcion = $request->Descripcion;
        $anexooupdate->fecha =  Carbon::now();
       
        
        $anexooupdate->anexoep_id = $request->anexoep_id;
       
        // $docsoupdate->fecha = Carbon::now();

        $anexooupdate->save();
        return back()->with('mensaje', 'anexo se subió con éxito');
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
        // $devolverisprograma = App\EstandarPrograma::findOrFail($programa_id);
        $devolverprograma = App\EstandarPrograma::where('programa_id', $programa_id)->get();
        // $estandarprograma = App\EstandarPrograma::where('programa_id', 1)->get();
        return view('estandar_programa', compact('devolverprograma'));
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
        $devolverisprograma = App\EstandarPrograma::findOrFail($id);

        return view('programas.editar', compact('devolverisprograma'));
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
            // 'archivo' => 'required',
            'calificacion' => 'required'
            // 'descripcion' => 'required'
        ]);
        //codigo para conseguirr ruta y nomnre dle archivo subido
        // $data = $request->input('archivo');
        // $photo = $request->file('archivo')->getClientOriginalName();
        // $destination = base_path() . 'storage/public/Estandares';
        // $request->file('archivo')->move($destination, $photo);

        $notaupdate = App\EstandarPrograma::findOrFail($id);
        if ($request->hasFile('archivo')) {
            $notaupdate->archivo = $request->file('archivo')->store('public/Estandares');
        }
        // $notaupdate->archivo = $request->file('archivo')->store('public');
        $notaupdate->calificacion = $request->calificacion;
        $notaupdate->descripcion = $request->descripcion;
        $notaupdate->fecha = Carbon::now();
        $notaupdate->save();
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
    public function store(Request $request, $id)
    {
        //
    }
}
