<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista1Controller extends Controller
{
    public function exercicio1(){
        return view('lista1.exercicio1');
    }

    public function exercicio1Resultado(){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $nota4 = $request->nota4;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        return view('lista1.exercicio1-resultado', compact('media'));
    }

    public function exercicio2(){
        return view('lista1.exercicio2');
    }

    public function exercicio2Resultado(Request $request){

        $percentualValidos = $request->validos * 100 / $request->total;
        $percentualBrancos = $request->brancos * 100 / $request->total;
        $percentualNulos = $request->nulos * 100 / $request->total;

        return view('lista1.exercicio2-resultado', compact('percentualValidos', 'percentualBrancos', 'percentualNulos'));
    }

    public function exercicio13(){
        return view('lista1.exercicio13');
    }

    public function exercicio13Resultado(Request $request){

        $diasTotal = $request->dias;

        $anos = intval($diasTotal/365);
        $restoAnos = $diasTotal%365;

        $meses = intval($restoAnos/30);
        $dias = $restoAnos%30;

        return view('lista1.exercicio13-resultado', compact('anos', 'meses', 'dias', 'diasTotal'));
    }
}
