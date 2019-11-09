@extends('layouts.adminlte')

@section('conteudo')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Disciplinas</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">

                            <form action="/disciplina/store" method="post">
                                @csrf

                                <input type="hidden" id="id" name="id" value="{{$disciplina->id}}" />

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name="nome" value="{{$disciplina->nome}}" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="curso_id" class="col-sm-2 col-form-label">Curso: </label>
                                    <div class="col-sm-10">
                                        <select name="curso_id" id="curso_id" class="form-control">
                                            <option value="">Selecione</option>
                                            @foreach($cursos as $curso)
                                                <option value="{{$curso->id}}">{{$curso->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                        <a href="/disciplina" class="btn btn-danger">Voltar</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection