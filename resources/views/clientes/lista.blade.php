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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
