<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function () {

    Route::get('/curso', 'CursoController@index');
    Route::get('/php', 'ExerciciosController@php');

    Route::get('/curso/loop', 'CursoController@loop');
    Route::get('/curso/create', 'CursoController@create');
    Route::post('/curso/store', 'CursoController@store');
    Route::get('/curso/excluir/{id}', 'CursoController@delete');
    Route::get('/curso/edit/{id}', 'CursoController@edit');
    Route::get('/curso/verificar-nome/{nome}', 'CursoController@verificarNome');
    Route::get('/curso/verificar-codigo/{codigo}', 'CursoController@verificarCodigo');

    Route::get('/disciplina', 'DisciplinaController@index');
    Route::get('/disciplina/loop', 'DisciplinaController@loop');
    Route::get('/disciplina/create', 'DisciplinaController@create');
    Route::post('/disciplina/store', 'DisciplinaController@store');
    Route::get('/disciplina/excluir/{id}', 'DisciplinaController@delete');
    Route::get('/disciplina/edit/{id}', 'DisciplinaController@edit');

    Route::get('/dados-aluno', 'ExerciciosController@dadosAluno');
    Route::post('/dados-aluno', 'ExerciciosController@verificarDadosAluno');

    Route::get('/media', 'ExerciciosController@media');
    Route::post('/media', 'ExerciciosController@calcularMedia');

    Route::get('/l1-exercicio1', 'Lista1Controller@exercicio1');
    Route::post('/l1-exercicio1', 'Lista1Controller@exercicio1Resultado');

    Route::get('/l1-exercicio2', 'Lista1Controller@exercicio2');
    Route::post('/l1-exercicio2', 'Lista1Controller@exercicio2Resultado');

    Route::get('/l1-exercicio13', 'Lista1Controller@exercicio13');
    Route::post('/l1-exercicio13', 'Lista1Controller@exercicio13Resultado');


    Route::get('/helloworld', function () {
        return view('helloworld');
    });

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
