<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Turma extends Model
{
    use HasFactory;

    use Notifiable;
    protected $fillable = [
    	'user_id',
        'disciplina_id',
        'nota'
    ];
    public function disciplinas(){
        return $this->hasOne('App\Models\Disciplina', 'id', 'disciplina_id');
    }
    public function alunos(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
