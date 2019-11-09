@extends('layouts.adminlte')

@section('conteudo')

    <div class="row">
    	<div class="col-md-5">
    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Cursos</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <form enctype="multipart/form-data" action="/curso/store" method="post">
                                @csrf

                                <input type="hidden" id="id" name="id" value="{{$curso->id}}" />

                                <div class="form-group row">
                                    <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control" id="nome" name="nome" value="{{$curso->nome}}" >
                                        <div class="alert alert-danger" id="mensagemNome" style="display: none">
                                            O curso já existe
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="codigo" class="col-sm-2 col-form-label">Código: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="codigo" name="codigo" value="{{$curso->codigo}}" >
                                        <div class="alert alert-danger" id="mensagemCodigo" style="display: none">
                                            O código já existe
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="duracao" class="col-sm-2 col-form-label">Duração: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="duracao" name="duracao" value="{{$curso->duracao}}" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="arquivo" class="col-sm-2 col-form-label">Arquivo: </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="arquivo" name="arquivo" >
                                    </div>
                                </div>
                                @if($curso->arquivo)
                                    <div>
                                        <img width="100px" src="{{url('storage/' . $curso->arquivo)}}">
                                    </div>
                                @endif
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                        <a href="/curso" class="btn btn-danger">Voltar</a>
                                    </div>
                                </div>
                            </form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
        <div class="col-md-7">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Disciplinas</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Ações</th>
                                    <th>Nome</th>
                                    <th>Curso</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($curso->disciplinas as $disciplina)
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
                                        <td>{{$disciplina->curso->nome}}</td>
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

@section('js')

    <script>
        $(function(){
            $('#nome').change(function(){

                $.ajax({
                    url: '/curso/verificar-nome/' + $('#nome').val(),
                    success: function(existe){
                        if(existe > 0){
                            $('#mensagemNome').show('slow');
                            $('#nome').val('').focus();
                        } else {
                            $('#mensagemNome').hide('slow');
                        }
                    }
                });
            });

            $('#codigo').change(function(){

                $.ajax({
                    url: '/curso/verificar-codigo/' + $('#codigo').val(),
                    success: function(existe){
                        if(existe > 0){
                            $('#mensagemCodigo').show('slow');
                            $('#codigo').val('').focus();
                        } else {
                            $('#mensagemCodigo').hide('slow');
                        }
                    }
                });
            });
        })
    </script>

@endsection