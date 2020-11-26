<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\Turma;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MatricularTurmaController extends Controller
{

    public function index(){
        $disciplina = new Disciplina();
        return view('home.mturma', ['disciplinas' => $disciplina->get(), 'msg' => '']);
    }
    public function store(Request $request){
        $disciplina = new Disciplina();
        $turma = new Turma();
        $aluno = Auth::user();
        $rules = [
            'disciplina' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->view('home.mturma', ['disciplinas' => $disciplina->get(), 'msg'=> '', 'errors' => $validator->errors()], 400);
        } else  {
            if($turma->where('disciplina_id', '=', $request['disciplina'])
                    ->where('user_id', '=', $aluno->id)->exists()){
                    return response()->view('home.mturma', ['disciplinas' => $disciplina->get(), 'msg'=> '', 'error' => 'Disciplina já cadastrada ao aluno logado'], 400);
            }
            $turma->firstOrCreate([
                'user_id' => $aluno->id,
                'disciplina_id' => $request['disciplina']
                ]);
            return response()->view('home.mturma', ['disciplinas' => $disciplina->get(), 'msg' => 'Saved Succesfully'], 201);
        }
    }
}
