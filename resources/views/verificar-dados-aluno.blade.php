@extends('layouts.padrao')

@section('conteudo')
    <h1>Dados recuperados do aluno</h1>

    <p>Nome: {{$nome}}</p>
    <p>Telefone: {{$telefone}}</p>
    <p>Telefone: {{$endereco}}</p>
@endsection