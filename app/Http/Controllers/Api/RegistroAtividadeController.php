<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistroAtividadeController extends Controller
{
    public function index(){
        return view('home.ratividade');
    }
}
