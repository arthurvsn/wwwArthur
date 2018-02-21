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
                        <form class="form-horizontal" method="post" action="#">
                    @else
                        <form class="form-horizontal" method="post" action="#">
                    @endif
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Data:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nome" name="nome" class="form-control autofocus" placeholder="Selecione a data" value="{{ $data }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Hora:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Selecione a hora" value="{{ $hora }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nome">Tipo:</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline" for="statusA">
                                        <select class="form-contro">
                                            <option>SELECIONE</option>
                                        </select>
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