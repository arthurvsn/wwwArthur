<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index() 
    {
        return view('clientes.lista');
    }

    public function novoCliente()
    {
        return view('clientes.formulario');
    }
}
