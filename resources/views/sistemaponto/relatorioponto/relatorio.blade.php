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
                            <tr>
                                <th scope="row">Entrada</th>
                                <th scope="row">06/06/2018</th>
                                <th scope="row">08:34</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection