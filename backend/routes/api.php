<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'agendamento'], function () {
    Route::get('/','AgendamentoController@index');
});

Route::group(['prefix' => 'aluno'], function () {
    Route::get('/', 'AlunoController@index');
    Route::get('/{id}', 'AlunoController@find')->name('aluno.find');
    Route::get('/unidade/${id}','AlunoController@unidade')->name('aluno.unidade');
});

Route::group(['prefix' => 'usuario'], function () {
    Route::get('/', 'UsuarioController@index');
});

Route::group(['prefix' => 'turma'], function () {
    Route::get('/', 'TurmaController@index')->name('turma.index');
    Route::get('/{id}', 'TurmaController@get')->name('turma.get');
    Route::get('alunos/{id}', 'TurmaController@get')->name('turma.alunos');
});
