@extends('layouts.padrao')

@section('conteudo')
    <h1>Eleitores</h1>

    <p>Percentual de Votos Válidos: {{$percentualValidos}}%</p>
    <p>Percentual de Votos Brancos: {{$percentualBrancos}}%</p>
    <p>Percentual de Votos Nulos: {{$percentualNulos}}%</p>

@endsection