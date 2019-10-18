<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('js/fa/css/all.css')}}" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <title>Laravel</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Projeto Escola</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/curso">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/disciplina">Disciplina</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exercícios</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="/l1-exercicio1">Exercício 1</a>
                    <a class="dropdown-item" href="/exercicio2">Exercício 2</a>
                    <a class="dropdown-item" href="/exercicio3">Exercício 3</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form>
    </div>
</nav>

<div class="container">
    @yield('conteudo')
</div>


</body>
</html>