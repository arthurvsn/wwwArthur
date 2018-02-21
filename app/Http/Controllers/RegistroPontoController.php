<?php

namespace App\Http\Controllers;

use App\RegistroPonto;
use Illuminate\Http\Request;
use DateTime;
use App\OpcaoPonto;

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
        $opcoesPonto = OpcaoPonto::get();
        return view('sistemaponto.registrarponto.formulario', ['hora' => $horaAtual, 'data' => $dataAtual, 'opcoesPonto' => $opcoesPonto]);
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
        //
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
