@extends('layouts.sistemaponto')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Cadastro de um novo registro para o seu ponto
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                    <form class="form-horizontal" method="post" action="#">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nome">Data:</label>
                            <div class="col-sm-10">
                                <input type="text" id="data_ponto" name="data_ponto" class="form-control autofocus" placeholder="Selecione a data" value="{{ $data }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nome">Hora:</label>
                            <div class="col-sm-10">
                                <input type="text" id="hora_ponto" name="hora_ponto" class="form-control" placeholder="Selecione a hora" value="{{ $hora }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nome">Tipo:</label>
                            <div class="col-sm-10">
                                <label class="" for="statusA">
                                    <select class="form-control selectpicker" id="id_tipo_opcao_ponto" name="id_tipo_opcao_ponto">
                                        <option>SELECIONE</option>
                                        @foreach($opcoesPonto as $opcaoPonto)
                                            <option value="{{ $opcaoPonto->id_opcao_pontos }}">{{ $opcaoPonto->nome }}
                                        @endforeach
                                    </select>
                                </label>
                            </div>                                
                        </div>
                        <br />
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btm-primary" value="Registrar Ponto">
                                <input type="hidden" id="id_usuario" name="id_usuario" value="{{ $usuario }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection