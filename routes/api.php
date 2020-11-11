<?php

use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers\Api')->name('api.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');

    Route::group(['middleware' => 'web'], function () {
        Route::get('/registro-turma', 'RegistroTurmaController@index')->name('rturma');
        Route::post('/registro-turma', 'RegistroTurmaController@store');
    });
    Route::group(['middleware' => 'web'], function () {
        Route::get('/registro-atividade', 'RegistroAtividadeController@index')->name('ratividade');
        Route::post('/registro-atividade', 'RegistroAtividadeController@store');
    });
	Route::get('/visualizacao-pontuacao', 'VisualizacaoPontuacaoController@index')->name('vpontuacao');
	Route::get('/matricular-turma', 'MatricularTurmaController@index')->name('mturma');
	Route::get('/realizar-atividade', 'RealizarAtividadeController@index')->name('realizaratv');
	Route::get('/visualizacao-resposta', 'VisualizacaoRespostaController@index')->name('vresposta');
});
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');
