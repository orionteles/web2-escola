@extends('layouts.padrao')

@section('conteudo')

    <h1>Média</h1>

    <form action="/l1-exercicio1" method="post">
        @csrf

        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="text" class="form-control" name="nota1" id="nota1">
        </div>

        Nota 1: <input type="text" name="nota1"><br>
        Nota 2: <input type="text" name="nota2"><br>
        Nota 3: <input type="text" name="nota3"><br>
        Nota 4: <input type="text" name="nota4"><br>

        <input class="btn btn-success" type="submit" value="Enviar">

    </form>

@endsection