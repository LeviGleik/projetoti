<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Atividade;
use App\Models\Disciplina;
use Illuminate\Support\Facades\Validator;

class RegistroAtividadeController extends Controller
{
    public function __construct(){
        $dsc = new Disciplina();
        $this->disciplina = $dsc->get();
    }
    public function index(){

        return view('home.ratividade', ['msg' => '', 'disciplinas' => $this->disciplina]);
    }
    public function store(Request $request){
        $atividade = new Atividade();
        $rules = [
            'nome' => 'required|max:100',
            'disciplina' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->view('home.ratividade', ['msg' => '', 'disciplinas' => $this->disciplina, 'errors' => $validator->errors()], 400);
        } else{
            $atividade->create(['nome' => $request['nome'],
                'disciplina_id' => $request['disciplina'],
                'conteudo' => $request['conteudo'],
                'material' => $request['material']
            ]);
            return response()->view('home.ratividade', ['msg' => 'Saved Succesfully', 'disciplinas' => $this->disciplina], 201);
        }
    }
}
