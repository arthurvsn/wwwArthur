<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Redirect;

class ClientesController extends Controller
{
    public function index() 
    {
        $clientes = Cliente::get();
        return view('clientes.lista', ['clientes' => $clientes]);
    }

    public function novo()
    {
        return view('clientes.formulario');
    }

    public function salvar(Request $request)
    {
        $cliente = new Cliente();

        $salvarCliente = $cliente->create($request->all());

        \Session::flash('mensagem_sucesso', "Cliente cadastrado com sucesso!");
        return Redirect::to('clientes/novo');
    }

    public function editar($id)
    {
        $cliente = Cliente::findOrFail($id);
        
        return view('clientes.formulario', ['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso', "Cliente atualizado com sucesso!");
        return Redirect::to("clientes/".$id."/editar");
    }

    public function deletar($id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->delete();
        \Session::flash('mensagem_sucesso', "Cliente deletado com sucesso!");
        return Redirect::to("clientes/");
    }
}