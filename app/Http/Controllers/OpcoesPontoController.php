<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpcaoPonto;
use Redirect;

class OpcoesPontoController extends Controller
{
    public function index()
    {
        return view('sistemaponto.opcoes-ponto.formulario');
    }

    public function save(Request $request)
    {
        $opcaoPonto = new OpcaoPonto();

        $salvarOpcaoPonto = $opcaoPonto->create($request->all());
        \Session::flash('mensagem_sucesso', "Cliente cadastrado com sucesso!");
        return Redirect::to('opcoes-ponto');
    }
}
