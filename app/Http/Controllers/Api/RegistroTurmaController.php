<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disciplina;

class RegistroTurmaController extends Controller
{
    public function index(){
        return view('home.rturma');
    }
    public function store(Request $request){
        $disciplina = new Disciplina();
        $rules = [
            'nome' => 'required|max:50',
            'dia' => 'required',
            'horario' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return view('home.rturma', ['errors' => $validator->errors()]);
        }
        $disciplina->create(['nome' => $request['nome'],
            'horario' => $request['horario'],
            'dia' => $request['dia']
        ]);
    }

}
