@extends('layouts.padrao')

@section('conteudo')

    <h1>Eleitores</h1>

    <form action="/l1-exercicio2" method="post">
        @csrf

        Total de Eleitores: <input type="text" name="total"><br>
        <hr>
        Votos Válidos: <input type="text" name="validos"><br>
        Votos Brancos: <input type="text" name="brancos"><br>
        Votos Nulos: <input type="text" name="nulos"><br>
        <hr>

        <input class="btn btn-success" type="submit" value="Enviar">

    </form>

@endsection