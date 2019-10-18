<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{

    public function php(){
        return view('pagina1');
    }

    public function dadosAluno(){
        return view('dados-aluno');
    }

    public function verificarDadosAluno(Request $request){

        $nome = $request->nome;
        $telefone = $request->telefone;
        $endereco = $request->endereco;

        return view('verificar-dados-aluno', compact('nome', 'telefone', 'endereco'));
    }


    public function media(){
        return view('media');
    }

    public function calcularMedia(Request $request){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $nota4 = $request->nota4;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        return view('calcular-media', compact('media'));
    }
}
