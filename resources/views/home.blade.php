@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5>Bem vindo ao meu site</h5>
                    <p>Aqui é minha terra, onde coloco todos os meus aprendizados.</p>
                    <p>Sou desenvolvedor voltado para o back end e aprendendo mais sobre o front end.</p>
                    <p>Faço as minhas loucuras e sistemas básicos (pois é né, estou aprendendo hehe)</p>
                    <p>Fique a vontade mas sem avacalhar!<p>
                    <p>Valeu!!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
