<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistroTurmaController extends Controller
{
    public function index(){
        return view('home.rturma', ['msg' => 'fdf']);
    }
    public function store(Request $request){
        $disciplina = new Disciplina();
        $user = Auth::user();
        $rules = [
            'nome' => 'required|max:50',
            'dia' => 'required',
            'horario' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->view('home.rturma', ['msg'=> '', 'errors' => $validator->errors()], 400);
        } else{
            $disciplina->create(['nome' => $request['nome'],
                'horario' => $request['horario'],
                'dia' => implode(',', $request['dia']),
                'user_id' => $user->id
            ]);
            return response()->view('home.rturma', ['msg' => 'Saved Succesfully'], 201);
        }

    }

}
