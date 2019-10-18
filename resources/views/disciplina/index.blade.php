@extends('layouts.padrao')

@section('conteudo')

    <h1>Disciplinas</h1>

    <a href="/disciplina/create" class="btn btn-primary">Novo</a>

    <hr>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Nome</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>
            @foreach($disciplinas as $disciplina)
                <tr>
                    <td>
                        <a href="/disciplina/excluir/{{$disciplina->id}}">
                            <i style="color: red;" class="fa fa-times-circle"></i>
                        </a>
                        <a href="/disciplina/edit/{{$disciplina->id}}">
                            <i class="fa fa-edit"  style="color: #3490dc;"></i>
                        </a>
                    </td>
                    <td>{{$disciplina->nome}}</td>
                    <td>{{$disciplina->curso_id}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection