@extends('layouts.padrao')

@section('conteudo')
    <h1>Dados do Aluno</h1>

    <form action="/dados-aluno" method="post">
        @csrf
        Nome: <input type="text" name="nome"><br>
        Telefone: <input type="text" name="telefone"><br>
        Endereço: <input type="text" name="endereco"><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
