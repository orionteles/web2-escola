@extends('layouts.padrao')

@section('conteudo')

    <h1>Cursos</h1>

    @foreach($cursos as $curso)
        <input type="radio" name="curso"> {{$curso->nome}} <br>
    @endforeach

    <hr>

    @foreach($cursos as $curso)
        <input type="checkbox"> {{$curso->nome}} <br>
    @endforeach

    <hr>

    Curso:
    <select name="" id="">
        <option value="">Selecione</option>
        @foreach($cursos as $curso)
            <option value="{{$curso->id}}">{{$curso->nome}}</option>
        @endforeach
    </select>

    <hr>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Duração</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->nome}}</td>
                    <td>{{$curso->duracao}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection