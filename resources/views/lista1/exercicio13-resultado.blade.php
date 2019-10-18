@extends('layouts.padrao')

@section('conteudo')
    <h1>Uma pessoa de {{$diasTotal}} dias tem:</h1>

    <p>{{$anos}} anos</p>
    <p>{{$meses}} meses</p>
    <p>{{$dias}} dias</p>

@endsection