<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionarioPergunta extends Model
{
    use SoftDeletes;
    
    protected $table = 'questionario_perguntas';
    protected $fillable = ['questionario_id', 'pergunta_id'];
}
