<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use carbon\Carbon;
use App\Docs;
use App\Programa;
use App;

class DocsController extends Controller
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

        
    }
    public function informes(){
        if (auth()->user()->rol == 'Admin') {
            $docus=App\Docs::all();
        } else {
            return view('error');
        }
       
        return view('Docmuentos',compact('docus'));
    }
    public function docs($programa_id)
    {
      
        
        $id = App\Programa::findOrFail($programa_id);
        $docs = App\Docs::where('programa_id', $programa_id)->get();
        
        return view('programadoc', compact('docs','id'));
    }
    public function updates(Request $request)
    {
        $request->validate([

            'reportes' => 'required',
            'Descripcion' => 'required'

        ]);
        
        $docsoupdate = new App\Docs;
        // $docsoupdate = App\Docs::findOrFail($id);

        if ($request->hasFile('reportes')) {
            $docsoupdate->reportes = $request->file('reportes')->store('public/Reportes');
        }
        $docsoupdate->Descripcion = $request->Descripcion;
        $docsoupdate->fecha =  Carbon::now();
        $docsoupdate->programa_id = $request->programa_id;
       
        // $docsoupdate->fecha = Carbon::now();

        $docsoupdate->save();
        return back()->with('mensaje', 'reporte subido');
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
