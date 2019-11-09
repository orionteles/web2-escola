@extends('layouts.adminlte')

@section('conteudo')

    <div class="row">
        <div class="col-md-12">

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Disciplina</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/disciplina/create" class="btn btn-primary">Novo</a>

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Ações</th>
                                    <th>Nome</th>
                                    <th>Duração</th>
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
                                        <td>{{$disciplina->duracao}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection