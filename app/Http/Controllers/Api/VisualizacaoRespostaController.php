<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Atividade;
use App\Models\Disciplina;

class VisualizacaoRespostaController extends Controller
{
    public function index(){
        $disciplinas = new Disciplina();
        $atividades = new Atividade();
        return view('home.vresposta', ['atividades' => $atividades->get(), 'disciplinas' => $disciplinas->get()]);
    }
}
