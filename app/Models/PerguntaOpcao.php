<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerguntaOpcao extends Model
{
    protected $table = 'pergunta_opcoes';
    protected $fillable = ['pergunta_id', 'ds_pergunta_opcao', 'next_pergunta_id'];
}
