<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerguntaOpcao extends Model
{
    use SoftDeletes;
    
    protected $table = 'pergunta_opcoes';
    protected $fillable = ['pergunta_id', 'ds_pergunta_opcao', 'next_pergunta_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
