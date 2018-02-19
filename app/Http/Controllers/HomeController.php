<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check())
        {
            return view('home');
        }
        else 
        {
            return view('login');
        }
    }

    /**
     * Funcao para retornar a pagino de bem vindo do site
     * @return view welcome
     */
    public function laddingPage()
    {
        return view('welcome');
    }

    public function editarUsuario()
    {
        echo "Nothing Working, wait a momemt, please";die();
        $idusuario = Auth::user()->id;

        $usuario = User::findOrFail($idusuario);
        return view('auth.register');
    }
}
