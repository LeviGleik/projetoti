<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aluno;
class VisualizacaoPontuacaoController extends Controller
{
    public function index(){
        $alunos = new Aluno();
       // return response()->json($alunos->find(1)->disciplinas->first()->nome);
        return view('home.vpontuacao', ['alunos' => $alunos->paginate(15)]);
    }
}
