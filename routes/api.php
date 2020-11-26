<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [HomeController::class, 'index'])->middleware(['auth:sanctum', 'verified']);

Route::get('/index', [HomeController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('index');
Route::namespace('App\Http\Controllers')->name('api.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');

    Route::group(['middleware' => ['auth:sanctum', 'verified', 'web']], function () {
        Route::resource('registro-turma', 'Api\RegistroTurmaController', ['except' => [
            'create', 'edit'
          ]]);
        //Route::post('/registro-turma', 'Api\RegistroTurmaController@store');
        Route::get('/registro-atividade', 'Api\RegistroAtividadeController@index')->name('ratividade');
        Route::post('/registro-atividade', 'Api\RegistroAtividadeController@store');
        Route::get('/matricular-turma', 'Api\MatricularTurmaController@index')->name('mturma');
        Route::post('/matricular-turma', 'Api\MatricularTurmaController@store');
        // Route::get('/realizar-atividade', 'Api\RealizarAtividadeController@index')->name('realizaratv');
        // Route::post('/realizar-atividade', 'Api\RealizarAtividadeController@store');
        Route::resource('realizar-atividade', 'Api\RealizarAtividadeController', ['except' => [
            'create', 'edit', 'update', 'delete'
          ]]);
        Route::get('/visualizacao-resposta', 'Api\VisualizacaoRespostaController@index')->name('vresposta');
        Route::post('/visualizacao-resposta', 'Api\VisualizacaoRespostaController@store');
        Route::resource('visualizacao-pontuacao', 'Api\VisualizacaoPontuacaoController', ['except' => [
            'create', 'edit'
          ]]);
        //Route::get('/visualizacao-pontuacao_d', 'Api\VisualizacaoPontuacaoDController@index')->name('vpontuacao_d');
        Route::post('/visualizacao-pontuacao_d', 'Api\VisualizacaoPontuacaoController@show')->name('vpontuacao_d');
        Route::put('/visualizacao-pontuacao_d/{id}{user}', 'Api\VisualizacaoPontuacaoController@update')->name('pontuacao_d');
        Route::delete('/visualizacao-pontuacao_d/{id}{user}', 'Api\VisualizacaoPontuacaoController@delete')->name('pontuacao_delete');
        //Route::get('/avaliar-turma', 'Api\VisualizacaoPontuacaoController@save')->name('avaliarturma');
        Route::post('/avaliar-turma{id}{user}', 'Api\VisualizacaoPontuacaoController@save')->name('avaliarturma');
        // Route::post('/avaliar-turma', 'Api\PontuacaoController@store');
    });

});
