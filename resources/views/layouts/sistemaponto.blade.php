<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sistema de Ponto</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link href="{{ asset('css/sistemaponto.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Sistema de Registrar Ponto</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Opções</p>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li><a href="{{ url('laddingpage') }}">Sobre Mim</a></li>
                            @if (!Auth::guest())
                                <li>
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a href="#gestaoSubmenu" data-toggle="collapse" aria-expanded="false">Gestão</a>
                        <ul class="collapse list-unstyled" id="gestaoSubmenu">
                            <li><a href="{{ url('gestao-ponto') }}">Ativos</a></li>
                            <li><a href="{{ url('opcoes-ponto') }}">Opções Ponto</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('registro-ponto') }}">Registar Ponto</a>
                    </li>
                    <li>
                        <a href="{{ url('relatorio') }}">Relatorios</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <div class="col-md-10">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">

                            <div class="navbar-header">
                                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                    <i class="glyphicon glyphicon-align-left"></i>
                                    <span>Menu</span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ url('/sistemaponto') }}">Home</a></li>
                                    <li><a href="{{ url('/editar') }}">Meu Perfil</a></li>
                                    @if (!Auth::guest())
                                        <li>
                                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                            </a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </nav>

                    @yield('content')
                </div>
            </div>
        </div>

        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script src="{{ asset('js/sistemaponto.js') }}"></script>
    </body>
</html>
