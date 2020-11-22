<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Atividade extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
    	'nome',
        'conteudo',
        'disciplina_id',
		'material'
    ];
}
