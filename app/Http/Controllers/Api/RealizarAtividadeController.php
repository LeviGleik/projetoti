<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Atividade;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class RealizarAtividadeController extends Controller
{
    public function index(){
        $disciplinas = new Disciplina();
        $atividades = new Atividade();
        return view('home.realizaratv', ['atividades' => $atividades->get(), 'disciplinas' => $disciplinas->get()]);
    }
    public function store(Request $request){

    }
}
