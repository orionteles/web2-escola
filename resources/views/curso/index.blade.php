@extends('layouts.adminlte')

@section('conteudo')

    <div class="row">
    	<div class="col-md-12">

    		<div class="box box-danger">
    			<div class="box-header with-border">
    				<h3 class="box-title">Cursos</h3>
    			</div>
    			<div class="box-body">
    				<div class="row">
    					<div class="col-md-12">
                            <a href="/curso/create" class="btn btn-primary">Novo</a>

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Ações</th>
                                    <th>Nome</th>
                                    <th>Duração</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cursos as $curso)
                                    <tr>
                                        <td>
                                            <a href="/curso/excluir/{{$curso->id}}">
                                                <i style="color: red;" class="fa fa-times-circle"></i>
                                            </a>
                                            <a href="/curso/edit/{{$curso->id}}">
                                                <i class="fa fa-edit"  style="color: #3490dc;"></i>
                                            </a>
                                        </td>
                                        <td>{{$curso->nome}}</td>
                                        <td>{{$curso->duracao}}</td>
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