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
        \Session::flash('mensagem_sucesso', "Tipo de ponto cadastrado com sucesso!");
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

    /**
     * 
     */
    public function update($id, Request $request)
    {
        try
        {
            
            $opcaoPonto = OpcaoPonto::findOrFail($id);
    
            $opcaoPonto->update($request->all());
    
            \Session::flash('mensagem_sucesso', "Opção ponto atualizado com sucesso!");
            return Redirect::to("opcoes-ponto/".$id."/editar");

        }
        catch (Exception  $e)
        {
            \Session::flash('mensagem_erro', $e->getMessage());
            return Redirect::to("opcoes-ponto/".$id."/editar");
        }
    }
}
