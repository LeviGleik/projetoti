<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disciplina;
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
        $aluno = Auth::user();
        $rules = [
            'disciplina' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->view('home.mturma', ['disciplinas' => $disciplina->get(), 'msg'=> '', 'errors' => $validator->errors()], 400);
        } else{
            $disciplina->where('id', $request['disciplina'])->update(['user_id' => $aluno->id]);
            return response()->view('home.mturma', ['disciplinas' => $disciplina->get(), 'msg' => 'Saved Succesfully'], 201);
        }
    }
}
