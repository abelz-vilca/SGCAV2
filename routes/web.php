<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//PRUEBA PARA INPUT
Route::get('/subir', 'PruebaController@subirArchivo')->name('subir');
Route::post('/subirs', ['as' => 'subir.archivo', 'uses' => 'PruebaController@create']);
//prueba grafico
Route::get('/grafic', 'PruebaController@grafic')->name('grafic');
Route::get('/grafic2', 'PruebaController@grafic2')->name('grafic2');

//otras Rutas
Route::get('/acreditacion', 'PagesController@inicio')->name('acreditacion');
Route::get('/reportetotal', 'PagesController@reporte')->name('reporte');
route::get('/errors', 'ProgramaController@error')->name('errors');

//para devolver criterio
Route::get('/criterios', 'CriterioController@create')->name('criterios');

Route::get('/criterios/{id}', ['as' => 'criterios.calificar', 'uses' => 'CriterioController@editar']);

//RUTA DE EDITAR CRITERIO ESTANDAR
Route::get('/criterioestandar', 'CriterioController@criterio')->name('crietrioestandar');
Route::get('/criterios/{id}', ['as' => 'programadetalle', 'uses' => 'CriterioEstandarController@editar']);
Route::get('', function () {
    return view('');
});

Route::get('/inicio', function () {
    return view('layouts.plantilla');
});
Route::get('', function () {
    return view('welcome');
});
// ************************************************************************************
// OTROS RUTAS DEL SISTEMA
// ************************************************************************************

Route::get('/programas', 'ProgramaController@create')->name('programa');
Route::get('/actualizardatos', 'PagesController@datos')->name('actualizardatos');




//mostrar lista de progrmas
Route::get('/listarprogramas', 'ProgramaController@creates');

//PARA EDITAR PROGRAMA DE ESTUDIOS
Route::get('estandar_programa', ['as' => 'estandar_programa.create', 'uses' => 'EstandarProgramaController@create']);
Route::get('/editar/{id}', ['as' => 'programas.editar', 'uses' => 'EstandarProgramaController@editar']);

Route::put('/editar/{id}', ['as' => 'estandar_programa.update', 'uses' => 'EstandarProgramaController@updates']);
Route::get('estandar_programa/{programa_id}', ['as' => 'estandar_programaid', 'uses' => 'EstandarProgramaController@devolverprograma']);

//link para mandar a su calificacion
Route::get('/programass/{id}', ['as' => 'listardetalles', 'uses' => 'ProgramaController@editare']);

//////****************************************************** */ruta pa suma

Route::get('/suma',  'PagesController@sumas');

Route::get('/sumas/{id}', ['as' => 'sumacalificacion', 'uses' => 'PagesController@sumas']);
Route::get('/factor/{id}', ['as' => 'graficofactor', 'uses' => 'PagesController@factor']);
Route::get('/dimension/{id}', ['as' => 'graficodimension', 'uses' => 'PagesController@dimension']);
Route::get('/ed/{id}', ['as' => 'graficocaed', 'uses' => 'PagesController@ed']);

Route::get('/estandartotal', ['as' => 'estandartotal', 'uses' => 'PagesController@estandadarestotal']);

Route::get('/totalestandares', ['as' => 'totalestandar', 'uses' => 'PagesController@totalestandares']);
// *******************************************************************************************************
// *******************************************************************************************************

Route::get('reporte', 'PagesController@reportes')->name('reportes');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
