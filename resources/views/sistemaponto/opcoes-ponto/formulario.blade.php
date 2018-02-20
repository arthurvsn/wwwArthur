@extends('layouts.sistemaponto')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Cadastro de um novo tipo de opção para o ponto
                </div>
                <div class="panel-body">
                    @if(Request::is('*/editar'))                        
                        <form class="form-horizontal" method="post" action="">
                    @else
                        <form class="form-horizontal" method="post" action="#">
                    @endif
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nome" name="nome" class="form-control autofocus" placeholder="Digite o nome do tipo de ponto" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Status:</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline" for="statusA">Ativo
                                        <input type="radio" checked id="statusA" name="status" class="form-control autofocus" value="A">
                                    </label>
                                    <label class="radio-inline" for="statusI">Inativo
                                        <input type="radio" id="statusI" name="status" class="form-control autofocus" value="I">
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
    </div>
@endsection