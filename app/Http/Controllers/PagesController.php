<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Dimension;

use App\EstandarPrograma;
use app\User;

class PagesController extends Controller
{
    public function primero()
    {
        return view('auth.login');
    }
    public function inicio()
    {
        return view('acreditacion');
    }
    public function iniciar()

    {
        // {{auth()->user()->rol}
        $rol = App\User::all();

        // $roles = App\User::where('id', auth()->user()->programa_id)->get();

        // $roless = App\CriterioEstandar::findOrFail(auth()->user()->programa_id);

        return view('layouts.plantilla', compact('rol'));
    }

    public function datos()
    {
        return view('actualizardatos');
    }

    public function reporte()
    {
        if (auth()->user()->rol == 'docente') {
            return view('error');
            // return view('reportes.reporteprogramas', compact('programas','error'))
            // print '<script language="JavaScript">';
            // print 'alert("NO TIENE ACCESO A ESTE MENU  click atras");';
            //  print '</script>';
            // $programas = App\Programa::where('id',auth()->user()->programa_id)->get();
        } else {
            $programas = App\Programa::all();
        }

        return view('reportes.reporteprogramas', compact('programas', 'error'));
    }
    public function reportes()
    {

        $programas = App\Programa::where('id', '=', 1)->get();

        $factor1 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(1, 4))->get()->sum('calificacion');

        $factor2 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(5, 6))->get()->sum('calificacion');

        $factor3 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(7, 8))->get()->sum('calificacion');

        $factor4 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(9, 13))->get()->sum('calificacion');

        $factor5 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(14, 17))->get()->sum('calificacion');

        $factor6 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(18, 21))->get()->sum('calificacion');

        $factor7 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(22, 24))->get()->sum('calificacion');

        $factor8 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(25, 26))->get()->sum('calificacion');

        $factor9 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(27, 27))->get()->sum('calificacion');

        $factor10 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(28, 31))->get()->sum('calificacion');

        $factor11 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(32, 32))->get()->sum('calificacion');

        $factor12 = App\EstandarPrograma::where('programa_id', '=', 1)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');

        return view('reportes.reporte', compact(
            'programas',
            'factor1',
            'factor2',
            'factor3',
            'factor4',
            'factor5',
            'factor6',
            'factor7',
            'factor8',
            'factor9',
            'factor10',
            'factor11',
            'factor12'
        ));
    }
    public function sumas($id)
    {
        $programas = App\Programa::findOrFail($id);
        $estandarprograma = App\EstandarPrograma::where('programa_id', $id)->get();

        $categorias = App\EstandarPrograma::where('programa_id', $id)->get()->sum('calificacion');

        $factor1 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 4))->get()->sum('calificacion');

        $factor2 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(5, 6))->get()->sum('calificacion');

        $factor3 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(7, 8))->get()->sum('calificacion');

        $factor4 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 13))->get()->sum('calificacion');

        $factor5 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(14, 17))->get()->sum('calificacion');

        $factor6 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(18, 21))->get()->sum('calificacion');

        $factor7 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(22, 24))->get()->sum('calificacion');

        $factor8 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(25, 26))->get()->sum('calificacion');

        $factor9 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 27))->get()->sum('calificacion');

        $factor10 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(28, 31))->get()->sum('calificacion');

        $factor11 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(32, 32))->get()->sum('calificacion');

        $factor12 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');

        $dimension01 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 8))->get()->sum('calificacion');
        $dimension02 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 26))->get()->sum('calificacion');
        $dimension03 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 32))->get()->sum('calificacion');
        $dimension04 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');

        return view('sumaesatandar', compact(
            'programas',
            'estandarprograma',
            'categorias',
            'factor1',
            'factor2',
            'factor3',
            'factor4',
            'factor5',
            'factor6',
            'factor7',
            'factor8',
            'factor9',
            'factor10',
            'factor11',
            'factor12',
            'dimension01',
            'dimension02',
            'dimension03',
            'dimension04'
        ));
    }
    public function factor($id)
    {
        $programas = App\Programa::findOrFail($id);
        $estandarprograma = App\EstandarPrograma::where('programa_id', $id)->get();

        $categorias = App\EstandarPrograma::where('programa_id', $id)->get()->sum('calificacion');

        $factor1 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 4))->get()->sum('calificacion');

        $factor2 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(5, 6))->get()->sum('calificacion');

        $factor3 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(7, 8))->get()->sum('calificacion');

        $factor4 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 13))->get()->sum('calificacion');

        $factor5 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(14, 17))->get()->sum('calificacion');

        $factor6 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(18, 21))->get()->sum('calificacion');

        $factor7 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(22, 24))->get()->sum('calificacion');

        $factor8 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(25, 26))->get()->sum('calificacion');

        $factor9 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 27))->get()->sum('calificacion');

        $factor10 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(28, 31))->get()->sum('calificacion');

        $factor11 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(32, 32))->get()->sum('calificacion');

        $factor12 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');

        $dimension1 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 8))->get()->sum('calificacion');
        $dimension2 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 26))->get()->sum('calificacion');
        $dimension3 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 32))->get()->sum('calificacion');
        $dimension4 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');
        return view('reportes.grafico', compact(
            'programas',
            'estandarprograma',
            'categorias',
            'factor1',
            'factor2',
            'factor3',
            'factor4',
            'factor5',
            'factor6',
            'factor7',
            'factor8',
            'factor9',
            'factor10',
            'factor11',
            'factor12',
            'dimension1',
            'dimension2',
            'dimension3',
            'dimension4'

        ));
    }
    public function dimension($id)
    {
        $programas = App\Programa::findOrFail($id);
        $estandarprograma = App\EstandarPrograma::where('programa_id', $id)->get();
        $categorias = App\EstandarPrograma::where('programa_id', $id)->get()->sum('calificacion');

        $dimension1 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 8))->get()->sum('calificacion');
        $dimension2 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 26))->get()->sum('calificacion');
        $dimension3 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 32))->get()->sum('calificacion');
        $dimension4 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');
        return view('reportes.dimensiones', compact(
            'programas',
            'estandarprograma',
            'categorias',
            'dimension1',
            'dimension2',
            'dimension3',
            'dimension4'

        ));
    }
    public function ed($id)
    {
        $programas = App\Programa::findOrFail($id);
        $estandarprograma = App\EstandarPrograma::where('programa_id', $id)->get();
        $estandares = App\EstandarPrograma::where('programa_id', $id)->get()->sum('calificacion');

        $dimension1 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(1, 8))->get()->sum('calificacion');
        $dimension2 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(9, 26))->get()->sum('calificacion');
        $dimension3 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(27, 32))->get()->sum('calificacion');
        $dimension4 = App\EstandarPrograma::where('programa_id', '=', $id)
            ->whereBetween('estandar_id', array(33, 34))->get()->sum('calificacion');
        return view('reportes.ed', compact(
            'programas',
            'estandarprograma',
            'estandares',
            'dimension1',
            'dimension2',
            'dimension3',
            'dimension4'

        ));
    }

    public function estandadarestotal()
    {

        $programa01 = App\EstandarPrograma::where('programa_id', 1)->get()->sum('calificacion');
        $programa02 = App\EstandarPrograma::where('programa_id', 2)->get()->sum('calificacion');
        $programa03 = App\EstandarPrograma::where('programa_id', 3)->get()->sum('calificacion');
        $programa04 = App\EstandarPrograma::where('programa_id', 4)->get()->sum('calificacion');
        $programa05 = App\EstandarPrograma::where('programa_id', 5)->get()->sum('calificacion');
        $programa06 = App\EstandarPrograma::where('programa_id', 6)->get()->sum('calificacion');
        $programa07 = App\EstandarPrograma::where('programa_id', 7)->get()->sum('calificacion');
        $programa08 = App\EstandarPrograma::where('programa_id', 8)->get()->sum('calificacion');
        $programa09 = App\EstandarPrograma::where('programa_id', 9)->get()->sum('calificacion');
        $programa10 = App\EstandarPrograma::where('programa_id', 10)->get()->sum('calificacion');
        $programa11 = App\EstandarPrograma::where('programa_id', 11)->get()->sum('calificacion');
        $programa12 = App\EstandarPrograma::where('programa_id', 12)->get()->sum('calificacion');
        $programa13 = App\EstandarPrograma::where('programa_id', 13)->get()->sum('calificacion');
        $programa14 = App\EstandarPrograma::where('programa_id', 14)->get()->sum('calificacion');
        $programa15 = App\EstandarPrograma::where('programa_id', 15)->get()->sum('calificacion');
        $programa16 = App\EstandarPrograma::where('programa_id', 16)->get()->sum('calificacion');
        $programa17 = App\EstandarPrograma::where('programa_id', 17)->get()->sum('calificacion');
        $programa18 = App\EstandarPrograma::where('programa_id', 18)->get()->sum('calificacion');
        $programa19 = App\EstandarPrograma::where('programa_id', 19)->get()->sum('calificacion');
        $programa20 = App\EstandarPrograma::where('programa_id', 20)->get()->sum('calificacion');
        $programa21 = App\EstandarPrograma::where('programa_id', 21)->get()->sum('calificacion');
        $programa22 = App\EstandarPrograma::where('programa_id', 22)->get()->sum('calificacion');
        $programa23 = App\EstandarPrograma::where('programa_id', 23)->get()->sum('calificacion');
        $programa24 = App\EstandarPrograma::where('programa_id', 24)->get()->sum('calificacion');
        $programa25 = App\EstandarPrograma::where('programa_id', 25)->get()->sum('calificacion');
        $programa26 = App\EstandarPrograma::where('programa_id', 26)->get()->sum('calificacion');
        $programa27 = App\EstandarPrograma::where('programa_id', 27)->get()->sum('calificacion');
        $programa28 = App\EstandarPrograma::where('programa_id', 28)->get()->sum('calificacion');
        $programa29 = App\EstandarPrograma::where('programa_id', 29)->get()->sum('calificacion');
        $programa30 = App\EstandarPrograma::where('programa_id', 30)->get()->sum('calificacion');
        $programa31 = App\EstandarPrograma::where('programa_id', 31)->get()->sum('calificacion');
        $programa32 = App\EstandarPrograma::where('programa_id', 32)->get()->sum('calificacion');
        $programa33 = App\EstandarPrograma::where('programa_id', 33)->get()->sum('calificacion');


        return view('reportes.totalestandares', compact(

            'programa01',
            'programa02',
            'programa03',
            'programa04',
            'programa05',
            'programa06',
            'programa07',
            'programa08',
            'programa09',
            'programa10',
            'programa11',
            'programa12',
            'programa13',
            'programa14',
            'programa15',
            'programa16',
            'programa17',
            'programa18',
            'programa19',
            'programa20',
            'programa21',
            'programa22',
            'programa23',
            'programa24',
            'programa25',
            'programa26',
            'programa27',
            'programa28',
            'programa29',
            'programa30',
            'programa31',
            'programa32',
            'programa33'

        ));
    }
    public function totalestandares()
    {
        $programas = App\Programa::findOrFail();
        $estandarprograma = App\EstandarPrograma::where('programa_id', 1)->get();
        $estandares = App\EstandarPrograma::where('programa_id', 1)->get()->sum('calificacion');
        $dimension1 = App\EstandarPrograma::where('programa_id', '=', 1)

            ->whereBetween('estandar_id', array(1, 8))->get()->sum('calificacion');

        $pastel = EstandarPrograma::select('estandar_programa.estandar_id', '=', 1, 'estandar_programa.calificacion')
            ->whereBetween('estandar_id', array(1, 8))->get()->sum('calificacion');
        return view('reportes.totalestandares', ['pastel' => $pastel]);
    }
}
