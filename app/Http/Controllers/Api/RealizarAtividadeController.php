<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Atividade;
use App\Models\Disciplina;
use App\Models\Questoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RealizarAtividadeController extends Controller
{
    public function __construct(){
        $disciplinas = new Disciplina();
        $atividades = new Atividade();
        $this->atividades = $atividades;
        $this->disciplina = $disciplinas;
    }
    public function index(){
        $disciplinas = new Disciplina();
        $atividades = new Atividade();
        return view('home.realizaratv', ['atividades' => $atividades->get(), 'disciplinas' => $disciplinas->get()]);
    }
    public function store(Request $request){
        $questoes = new Questoes();
        $quest = array_merge($request['quest1'], $request['quest2'], $request['quest3'], $request['quest4'], $request['quest5'], $request['quest6'], $request['quest7'], $request['quest8'], $request['quest9'], $request['quest10']);
        //  return dd($quest);
        $questoes->updateOrCreate(['disciplina_id' => $request['disciplina'],
            'atividade_id' => $request['atvd']],
            ['quest' => implode(',', $quest),
            'disciplina_id' => $request['disciplina'],
            'atividade_id' => $request['atvd'],
            'user_id' => Auth::user()->id
            ]);
        return response()->view('home.realizaratv', ['msg' => 'Saved Succesfully', 'atividades' => $this->atividades->get(), 'disciplinas' => $this->disciplina->get()], 201);
    }
}
