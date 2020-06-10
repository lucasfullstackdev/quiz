<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    protected $table = 'perguntas';
    protected $fillable = ['ds_pergunta', 'tipo_pergunta_id'];
}
