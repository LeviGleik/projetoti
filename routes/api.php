<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers')->name('api.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');

    Route::group(['middleware' => 'web'], function () {
        Route::get('/registro-turma', 'Api\RegistroTurmaController@index')->name('rturma');
        Route::post('/registro-turma', 'Api\RegistroTurmaController@store');
        Route::get('/registro-atividade', 'Api\RegistroAtividadeController@index')->name('ratividade');
        Route::post('/registro-atividade', 'Api\RegistroAtividadeController@store');
        Route::get('/matricular-turma', 'Api\MatricularTurmaController@index')->name('mturma');
        Route::post('/matricular-turma', 'Api\MatricularTurmaController@store');
        Route::get('/realizar-atividade', 'Api\RealizarAtividadeController@index')->name('realizaratv');
        Route::post('/realizar-atividade', 'Api\RealizarAtividadeController@store');
        Route::get('/visualizacao-resposta', 'Api\VisualizacaoRespostaController@index')->name('vresposta');
        Route::post('/visualizacao-resposta', 'Api\VisualizacaoRespostaController@store');

    });
    // Route::group(['middleware' => 'auth'], function () {
    //     Route::get('/login', 'Auth\LoginController@index')->name('login');
    //     Route::post('/login', 'Auth\LoginController@store');
    //     Route::get('/register', 'Auth\RegisterController@index')->name('register');
    //     Route::post('/register', 'Auth\RegisterController@store');
    // });
	Route::get('/visualizacao-pontuacao', 'Api\VisualizacaoPontuacaoController@index')->name('vpontuacao');
});
//Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    //Auth::routes();
    return $request->user();
});
// Route::namespace('App\Http\Controllers\Auth')->name('auth.')->group(function(){
    // Route::group(['middleware' => 'auth:api'], function () {

    //     Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');
    //     Route::post('/login', 'App\Http\Controllers\Auth\LoginController@store');
    //     Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@index')->name('register');
    //     Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@store');
    // });
// });
