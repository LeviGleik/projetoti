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
        $turma = new Turma();
        $questoes = new Questoes();
        $questoes = $questoes->where('disciplina_id', '=', $id)->where('user_id', '=', $user)->get();
        $turma = $turma->where([['disciplina_id', '=', $id], ['user_id', '=', $user]])->get();
        return view('home.avaliarturma', ['msg'=> '', 'turma' => $turma[0], 'disciplina' => $id, 'aluno' => $user, 'questoes' => $questoes]);
    }
    public function save(Request $request, $id, $user){
        $turma = new Turma();
        $questoes = new Questoes();
        $rules = [
            'nota' => 'required|min:0|max:10'
        ];
        $turmas = $turma->where([['disciplina_id', '=', $id], ['user_id', '=', $user]])->get();
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 400);
        } else{
            $turma->updateOrCreate(['disciplina_id' => $id,
            'user_id' => $user],['nota' => $request['nota']]);
            return response()->view('home.avaliarturma', ['turma' => $turmas[0], 'msg'=> 'Nota gravada com sucesso', 'disciplina' => $id, 'aluno' => $user, 'questoes' => $questoes->where('disciplina_id', '=', $id)->where('user_id', '=', $user)->get()]);
        }
    }
    public function delete($id, $user){
        $turma = new Turma();
        $questoes = new Questoes();
        $aluno = ($turma->where('disciplina_id', '=', $id)->where('user_id', '=', $user)->get()[0]->id);
        $turma->find($aluno)->delete();
        return redirect('/');
    }
}
