@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Empresas que fiz testes ou outras coisas 
                    @if (!Auth::guest())
                        <a class="pull-right" href="{{ url('clientes/novo') }}">Novo Cliente</a>
                    @endif
                </div>
                <div class="panel-body">
                    Meus testes
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                    <table class="table">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>{{ $cliente->numero }}</td>
                                <td>
                                    <a href="clientes/{{$cliente->id}}/editar" style="display: inline"><button class="btn btn-sm btn-default">Editar</button> </a>
                                    <form method="post" style="display: inline" action="{{ url('clientes/excluir/'.$cliente->id) }}">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
