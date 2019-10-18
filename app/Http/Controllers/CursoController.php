<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();

        return view('curso.index', compact('cursos'));
    }

    public function create(){
        $curso = new Curso();
        return view('curso.formulario', compact('curso'));
    }

    public function store(Request $request)
    {
        if($request->id){
            $curso = Curso::find($request->id);
            $curso->fill($request->all());
        } else {
            $curso = new Curso($request->all());
        }

        $curso->save();

        return redirect('/curso');
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('curso.formulario', compact('curso'));
    }

    public function delete($id)
    {
        Curso::destroy($id);
        return redirect('/curso');
    }

    public function loop(){
        $cursos = Curso::all();

        return view('curso.loop', compact('cursos'));
    }
}
