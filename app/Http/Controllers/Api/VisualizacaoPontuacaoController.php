<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisualizacaoPontuacaoController extends Controller
{
    public function index(){
        return view('home.vpontuacao');
    }
}
