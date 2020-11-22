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


Route::get("/index", [HomeController::class, 'index'])->middleware(['auth:sanctum', 'verified']);
Route::namespace('App\Http\Controllers')->name('api.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');

    Route::group(['middleware' => ['auth:sanctum', 'verified', 'web']], function () {
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
        Route::get('/visualizacao-pontuacao', 'Api\VisualizacaoPontuacaoController@index')->name('vpontuacao');
    });

});
