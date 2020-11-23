<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Disciplina extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
    	'nome',
		'horario',
        'dia',
        'user_id'
    ];
}
