<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpcaoPonto;
use Redirect;
use Illuminate\Support\Facades\DB;

class OpcoesPontoController extends Controller
{
    public function index()
    {
        $opcoes = OpcaoPonto::get();
        return view('sistemaponto.opcoes-ponto.formulario', ['opcoes' => $opcoes]);
    }

    public function save(Request $request)
    {
        $opcaoPonto = new OpcaoPonto();

        $salvarOpcaoPonto = $opcaoPonto->create($request->all());
        \Session::flash('mensagem_sucesso', "Cliente cadastrado com sucesso!");
        return Redirect::to('opcoes-ponto');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $registroPonto
     */
    public function editar($id)
    {
        /*$opcaoPontos = new OpcaoPonto();
        $opcaoPonto = $opcaoPontos->getOpcaoPontoById($id);*/
        $opcaoPonto = OpcaoPonto::findOrFail($id);
        $opcoes = OpcaoPonto::get();

        
        return view('sistemaponto.opcoes-ponto.formulario', ['opcaoPonto' => $opcaoPonto, 'opcoes' => $opcoes]);
    }
}
