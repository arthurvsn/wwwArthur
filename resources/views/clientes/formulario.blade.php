@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Cadastro de um novo ciente
                   <a class="pull-right" href="{{ url('clientes') }}">Listar Clientes</a>
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    @if(Request::is('*/editar'))                        
                        <form method="post" action="{{ url('clientes/'.$cliente->id) }}">
                    @else
                        <form method="post" action="{{ url('clientes/salvar') }}">
                    @endif
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control autofocus" placeholder="Digite o nome do Cliente" value="{{ $cliente->nome or null }}">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereco</label>
                                <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Digite o endereco do cliente" value="{{ $cliente->endereco or null }}">

                            <div class="form-group">
                                <label for="numero">Numero</label>
                                <input type="text" id="numero" name="numero" class="form-control" placeholder="Digite o numero do Cliente" value="{{ $cliente->numero or null }}">
                            </div>

                            <input type="submit" class="btn btm-primary" value="Salvar">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
