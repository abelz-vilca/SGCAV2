<?php

use Illuminate\Support\Facades\Route;
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
//rutas de sgc
Route::get('/sgc', 'SgcController@inicio')->name('sgc');

//mostrar login
Route::get('/', 'PagesController@primero')->name('primero');

//certificados
Route::get('/certificados', 'UsuarioController@certificados')->name('certificados');

//pantalla principal
Route::get('/inicio', 'PagesController@iniciar')->name('inicio');


//PRUEBA PARA INPUT
Route::get('/subir', 'PruebaController@subirArchivo')->name('subir');
Route::post('/subirs', ['as' => 'subir.archivo', 'uses' => 'PruebaController@create']);
//prueba grafico
Route::get('/grafic', 'PruebaController@grafic')->name('grafic');
Route::get('/grafic2', 'PruebaController@grafic2')->name('grafic2');

//RUTAS PARA REPORTES
Route::get('/reportestandar', 'ReporteController@reportestandar')->name('reportestandar');

//prueba para formulario
Route::get('/editarestandar', 'PruebaController@editarestandar')->name('editarestandar');


//otras Rutas
Route::get('/acreditacion', 'PagesController@inicio')->name('acreditacion');
Route::get('/reportetotal', 'PagesController@reporte')->name('reporte');
route::get('/errors', 'ProgramaController@error')->name('errors');

//para devolver criterio
Route::get('/criterios', 'CriterioController@create')->name('criterios');

//devolver docentes USUARIO
Route::get('/usuario', 'UsuarioController@creates')->name('usuario');


// ************************************************************************************
// OTROS RUTAS DEL SISTEMA
// ************************************************************************************

Route::get('/programas', 'ProgramaController@create')->name('programa');
Route::get('/actualizardatos', 'PagesController@datos')->name('actualizardatos');


//mostrar lista de progrmas
Route::get('/listarprogramas', 'ProgramaController@creates');

//PARA EDITAR estandar_programa
Route::get('estandar_programa', ['as' => 'estandar_programa.create', 'uses' => 'EstandarProgramaController@create']);
Route::get('/editar/{id}', ['as' => 'programas.editar', 'uses' => 'EstandarProgramaController@editar']);
Route::put('/editar/{id}', ['as' => 'estandar_programa.update', 'uses' => 'EstandarProgramaController@updates']);
Route::get('estandar_programa/{programa_id}', ['as' => 'estandar_programaid', 'uses' => 'EstandarProgramaController@devolverprograma']);

//PARA EDITAR criterio_estandar
Route::get('criterio_estandar', ['as' => 'criterio_estandar.create', 'uses' => 'CriterioEstandarController@create']);
Route::get('/editarcriterio/{id}', ['as' => 'criterio.editar', 'uses' => 'CriterioEstandarController@editar']);
Route::put('/editarcriterio/{id}', ['as' => 'criterio_estandar.update', 'uses' => 'CriterioEstandarController@updates']);
Route::get('criterio_estandar/{programa_id}', ['as' => 'criterio_programaid', 'uses' => 'CriterioEstandarController@devolverprograma']);

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


// Auth::routes();
Auth::routes(['register' => false]);
