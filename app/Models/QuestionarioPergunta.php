<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionarioPergunta extends Model
{
    protected $table = 'questionario_perguntas';
    protected $fillable = ['questionario_id', 'pergunta_id'];
}
