<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPergunta extends Model
{
    use SoftDeletes;
   
    protected $table = 'tipo_perguntas';
    protected $fillable = ['ds_tipo_pergunta'];
}
