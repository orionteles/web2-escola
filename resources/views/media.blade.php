@extends('layouts.padrao')

@section('conteudo')

    <h1>Média</h1>

    <form action="/media" method="post">
        @csrf

        Nota 1: <input type="text" name="nota1"><br>
        Nota 2: <input type="text" name="nota2"><br>
        Nota 3: <input type="text" name="nota3"><br>
        Nota 4: <input type="text" name="nota4"><br>

        <input class="btn btn-success" type="submit" value="Enviar">

    </form>

@endsection