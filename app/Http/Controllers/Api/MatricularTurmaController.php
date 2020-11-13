<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disciplina;

class MatricularTurmaController extends Controller
{
    public function index(){
        $disciplina = new Disciplina();
        return view('home.mturma', ['disciplinas' => $disciplina->get(), 'msg' => '']);
    }
    public function store(Request $request){
        $disciplina = new Disciplina();
        $disciplina->create(['id' => $request['id']]);
        return response()->view('home.mturma', ['msg' => 'Saved Succesfully'], 201);
    }
}
