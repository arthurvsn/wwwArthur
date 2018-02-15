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
                                    <a href="clientes/{{$cliente->id}}/editar" class="bton btn-sm btn-default">Editar</a>
                                    <button class="bton btn-sm">Excluir</button>
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
