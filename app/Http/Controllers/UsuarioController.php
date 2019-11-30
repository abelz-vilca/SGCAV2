<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Facade\FlareClient\View;

class UsuarioController extends Controller
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
    public function creates()
    {
        $usuarios = App\Usuario::all();
        return view('USUARIO.docentes', compact('usuarios'));
    }
    public function logine()
    {

        return view('LOGIN');
    }
    public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check()) {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/inicio');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View('LOGIN');
    }

    public function postLogin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if (Auth::attempt($userdata, Input::get('remember-me', 0))) {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/inicio');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('logine')
            ->with('mensaje_error', 'Tus datos son incorrectos')
            ->withInput();
    }
    public function logOut()
    {
        Auth::logout();
        return Redirect::to('/logine')
            ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
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
