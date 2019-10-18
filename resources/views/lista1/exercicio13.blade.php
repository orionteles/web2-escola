@extends('layouts.padrao')

@section('conteudo')

    <h1>Dias</h1>

    <form action="/l1-exercicio13" method="post">
        @csrf

        <div class="form-group row">
            <label for="dias" class="col-sm-2 col-form-label">Anos (em dias)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dias" name="dias">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>

    </form>

@endsection