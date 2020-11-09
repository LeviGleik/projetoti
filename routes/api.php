<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers\Api')->name('api.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');

    Route::group(['middleware' => ['web']], function () {
        Route::get('/registro-turma', 'RegistroTurmaController@index')->name('rturma');
    });


	Route::get('/registro-atividade', 'RegistroAtividadeController@index')->name('ratividade');
	Route::get('/visualizacao-pontuacao', 'VisualizacaoPontuacaoController@index')->name('vpontuacao');
	Route::get('/matricular-turma', 'MatricularTurmaController@index')->name('mturma');
	Route::get('/realizar-atividade', 'RealizarAtividadeController@index')->name('realizaratv');
	Route::get('/visualizacao-resposta', 'VisualizacaoRespostaController@index')->name('vresposta');
});
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');

Route::group(['middleware' => ['apiJwt']], function () {
    Route::post('/registro-turma', 'App\Http\Controllers\Api\RegistroTurmaController@store');
});
