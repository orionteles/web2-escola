@extends('layouts.padrao')

@section('conteudo')
    <h1>Média</h1>

    A Média é: {{ $media }}

    @if($media<7)
        <div class="alert alert-danger">
            O aluno está <strong>Reprovado</strong>
        </div>
    @else
        <div class="alert alert-success">
            O aluno está <strong>Aprovado</strong>
        </div>
    @endif

@endsection