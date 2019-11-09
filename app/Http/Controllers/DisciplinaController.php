<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index(){
        $disciplinas = Disciplina::all();

        return view('disciplina.index', compact('disciplinas'));
    }

    public function create(){
        $disciplina = new Disciplina();
        $cursos = Curso::all();

        return view('disciplina.formulario', compact('disciplina', 'cursos'));
    }

    public function store(Request $request)
    {
        if($request->id){
            $disciplina = Disciplina::find($request->id);
            $disciplina->fill($request->all());
        } else {
            $disciplina = new Disciplina($request->all());
        }

        $disciplina->save();

        return redirect('/disciplina');
    }

    public function edit($id)
    {
        $disciplina = Disciplina::find($id);
        return view('disciplina.formulario', compact('disciplina'));
    }

    public function delete($id)
    {
        Disciplina::destroy($id);
        return redirect('/disciplina');
    }

    public function loop(){
        $disciplinas = Disciplina::all();

        return view('disciplina.loop', compact('disciplinas'));
    }
}
