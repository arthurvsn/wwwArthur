@extends('layouts.sistemaponto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
             <div class="panel panel-default">
                <div class="panel-heading">
                    
                    <h3>Relátorio Ponto Usuário</h3>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Tipo Registro</th>
                                <th scope="col">Data</th>
                                <th scope="col">Horário</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dados as $dado)
                                <tr>
                                    <th scope="row">{{ $dado->nome }}</th>
                                    <th scope="row">{{ $dado->data_ponto }}</th>
                                    <th scope="row">{{ $dado->hora_ponto }}</th>
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