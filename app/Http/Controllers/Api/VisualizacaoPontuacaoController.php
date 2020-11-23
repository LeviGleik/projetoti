<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\User;

class VisualizacaoPontuacaoController extends Controller
{
    public function index(){
        $alunos = new User();
        $disciplinas = new Disciplina();
        return view('home.vpontuacao', ['disciplinas' => $disciplinas->paginate(15), 'alunos' => $alunos->where('professor', 0)->paginate(15)]);
    }
}
