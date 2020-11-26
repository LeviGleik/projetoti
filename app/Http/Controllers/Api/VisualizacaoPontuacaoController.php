<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\Questoes;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class VisualizacaoPontuacaoController extends Controller
{
    public function index(){
        $turma = new Turma();
        $disciplinas = new Disciplina();
        return view('home.vpontuacao_d', ['disciplinas' => $disciplinas->get()]);
    }
    public function store(Request $request){
        $alunos = new User();
        $disciplina = new Disciplina();
        $rules = [
            'disciplina' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->view('home.vpontuacao', ['disciplinas' => $disciplina->get(), 'msg'=> '', 'errors' => $validator->errors()], 400);
        } else{
            return view('home.vpontuacao', ['disciplinas' => $disciplina->paginate(15), 'alunos' => $alunos->where('professor', 0)->paginate(15)]);
       }
    }
    public function show(Request $request){
        $turma = new Turma();
        return view('home.vpontuacao', ['turmas' => $turma->where('disciplina_id', '=', $request['disciplina'])->get()]);
    }

    public function update($id, $user){
        $questoes = new Questoes();
        return view('home.avaliarturma', ['questoes' => $questoes->where('disciplina_id', '=', $id)->where('user_id', '=', $user)->get()]);
    }
}
