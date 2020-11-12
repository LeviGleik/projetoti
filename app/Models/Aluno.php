<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    // protected $fillable = [
    // 	'nome',
    //     'disciplina',
	// 	'nota'
    // ];
    public function disciplinas(){
        return $this->hasMany("App\Models\Disciplina", 'id', 'disciplina_id');
    }
}
