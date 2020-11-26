
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        table th, .table td {
            padding: 0.6rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand col-auto" href="/">Início</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarContent">
			<ul class="navbar-nav mr-auto">
              @auth
              @if(Auth::user()->professor == 1)
			  <li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" href="#" id="professor" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Professor
			    </a>
			    <div class="dropdown-menu" aria-labelledby="professor">
                  <a class="dropdown-item" href="{{ url('api/registro-turma') }}">Cadastrar turmas</a>
			      <a class="dropdown-item" href="{{ url('api/registro-atividade') }}">Cadastrar atividades</a>
			      <div class="dropdown-divider"></div>
			      <a class="dropdown-item" href="{{ url('api/visualizacao-pontuacao') }}">Pontuação e classificação</a>
			    </div>
              </li>
              @elseif(Auth::user()->professor == 0)
			  <li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" href="#" id="aluno" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Aluno
			    </a>
			    <div class="dropdown-menu" aria-labelledby="aluno">
			      <a class="dropdown-item" href="{{ url('api/matricular-turma') }}">Matricular-se em turma</a>
			      <a class="dropdown-item" href="{{ url('api/realizar-atividade') }}">Realizar atividade</a>
			      <div class="dropdown-divider"></div>
			      <a class="dropdown-item" href="{{ url('api/visualizacao-resposta') }}">Visualizar repostas</a>
			    </div>
              </li>
              @endif
              @endauth
			</ul>

			<ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		</div>
	</nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
