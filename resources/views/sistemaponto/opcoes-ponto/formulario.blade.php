@extends('layouts.sistemaponto')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Cadastro de um novo tipo de opção para o ponto        
                   
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    @if(Request::is('*/editar'))                        
                        <form class="form-horizontal" method="post" action="{{ url('opcoes-ponto/'.$opcaoPonto->id_opcao_pontos.'/update') }}">
                    @else
                        <form class="form-horizontal" method="post" action="opcoes-ponto/salvar">
                    @endif
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nome" name="nome" class="form-control autofocus" placeholder="Digite o nome do tipo de ponto" value="{{ $opcaoPonto->nome or null }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Status:</label>
                                <div class="col-sm-1">
                                    <label class="input-group-text" for="statusA">Ativo
                                        <input type="radio" id="statusA" name="status" class="form-control autofocus" value="A"
                                            @if(isset($opcaoPonto) && $opcaoPonto->status == 'A')
                                                checked="checked"
                                            @endif
                                        >
                                    </label>
                                </div>
                                <div class="col-sm-1">
                                    <label class="input-group-text" for="statusI">Inativo
                                        <input type="radio" id="statusI" name="status" class="form-control autofocus" value="I"
                                            @if(isset($opcaoPonto) && $opcaoPonto->status == 'I')
                                                checked="checked"
                                            @endif
                                        >                                   
                                    </label>
                                </div>                                
                            </div>
                            <br />
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" class="btn btm-primary" value="Salvar">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <h3>Tipo cadastrados</h3>
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Tipo Opcão</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($opcoes as $opcao)
                        <tr>
                            <td>{{ $opcao->nome }}</td>
                            @if($opcao->status === "A")
                                <td>Ativo</td>
                            @else
                                <td>Inativo</td>
                            @endif
                            <td>
                                <a href="{{ url('/opcoes-ponto/'.$opcao->id_opcao_pontos.'/editar') }}" style="display: inline"><button class="btn btn-sm btn-default">Editar</button> </a>
                                <button class="btn btn-sm btn-danger" style="display: inline" onclick="excluirOpcaoPonto({{ $opcao->id_opcoes_ponto }})">Excluir</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection