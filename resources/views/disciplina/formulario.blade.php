@extends('layouts.adminlte')

@section('conteudo')

    <div class="row">
        <!-- left column -->
        <div class="col-md-6">

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
                                    <label for="curso_id" class="col-sm-2 col-form-label">Curso_id: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="curso_id" name="curso_id" value="{{$disciplina->curso_id}}" >
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
        <div class="col-md-6">

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
                                    <label for="curso_id" class="col-sm-2 col-form-label">Curso_id: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="curso_id" name="curso_id" value="{{$disciplina->curso_id}}" >
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