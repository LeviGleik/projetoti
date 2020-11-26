<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Questoes extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
    	'quest',
        'disciplina_id',
        'atividade_id',
        'user_id'
    ];
    public function disciplina(){
        return $this->hasOne('App\Models\Disciplina', 'id', 'disciplina_id');
    }
    public function aluno(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
