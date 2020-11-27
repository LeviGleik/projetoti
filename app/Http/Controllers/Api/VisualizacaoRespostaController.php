<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Atividade;
use App\Models\Disciplina;
use App\Models\Turma;
use Illuminate\Support\Facades\Auth;

class VisualizacaoRespostaController extends Controller
{
    public function index(){
        $disciplinas = new Disciplina();
        $atividades = new Atividade();
        return view('home.vresposta', ['msg' => '','atividades' => $atividades->get(), 'disciplinas' => $disciplinas->get()]);
    }
    public function show(Request $request){
        $disciplinas = new Disciplina();
        $turma = new Turma();
        $turma = $turma->where([['disciplina_id', '=', $request['disciplina']], ['user_id', '=', Auth::user()->id]])->get();
        return view('home.vresposta', ['turma' => $turma, 'msg' => '', 'disciplinas' => $disciplinas->get()]);
    }
}
