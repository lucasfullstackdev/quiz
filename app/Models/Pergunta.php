<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pergunta extends Model
{
    use SoftDeletes;
    
    protected $table = 'perguntas';
    protected $fillable = ['ds_pergunta', 'tipo_pergunta_id'];
}
