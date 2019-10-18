@extends('layouts.padrao')

@section('conteudo')

    <h1>Cursos</h1>

    <form action="/curso/store" method="post">
        @csrf

        <input type="hidden" id="id" name="id" value="{{$curso->id}}" />

        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" value="{{$curso->nome}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="codigo" class="col-sm-2 col-form-label">Código: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{$curso->codigo}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="duracao" class="col-sm-2 col-form-label">Duração: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="duracao" name="duracao" value="{{$curso->duracao}}" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/curso" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </form>


@endsection