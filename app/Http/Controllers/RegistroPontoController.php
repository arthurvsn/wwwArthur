<?php

namespace App\Http\Controllers;

use App\RegistroPonto;
use Illuminate\Http\Request;
use DateTime;
use App\OpcaoPonto;
use Auth;
use App\User;
use Redirect;
use \App\Util\Util;

class RegistroPontoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        date_default_timezone_set('America/Sao_Paulo');
         
        $objetoDataAtual = new DateTime('NOW');
        $dataAtual = $objetoDataAtual->format('d/m/Y');
        $horaAtual = $objetoDataAtual->format('H:i:s');
        
        $opcaoPonto = new OpcaoPonto();
        $opcoesPonto = $opcaoPonto->getOpcoesByStatus();
        
        $usuario = Auth::user()->id;
        
        return view('sistemaponto.registrarponto.formulario', 
                        ['hora' => $horaAtual, 
                         'data' => $dataAtual, 
                         'opcoesPonto' => $opcoesPonto, 
                          'usuario' => $usuario
                    ]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $registroPonto  = new RegistroPonto();
            $usuario        = Auth::user()->id;
            $dataPonto      = Util::formataData2Db($request->get('data_ponto'));

            $registroPonto->create([
                'data_ponto'            => $dataPonto,
                'hora_ponto'            => $request->get('hora_ponto'),
                'id_tipo_opcao_ponto'   => $request->get('id_tipo_opcao_ponto'),
                'id_usuario'            => $usuario,
                'remember_token'        => $request->get('_token'),
            ]);

            \Session::flash('mensagem_sucesso', "Ponto registrado com sucesso!");
            return Redirect::to('registro-ponto');
        }
        catch(Exeception $e)
        {
            \Session::flash('mensagem_error', $e->getMessage());
            return Redirect::to('registro-ponto');            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroPonto  $registroPonto
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroPonto $registroPonto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroPonto  $registroPonto
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroPonto $registroPonto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroPonto  $registroPonto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroPonto $registroPonto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroPonto  $registroPonto
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroPonto $registroPonto)
    {
        //
    }
}
