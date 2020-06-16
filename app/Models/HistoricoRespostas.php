<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoricoRespostas extends Model
{
    use SoftDeletes;

    protected $table = 'historico_respostas';
    protected $fillable = ['questionario_id', 'pergunta_id', 'pergunta_opcao_id', 'user_id'];
}
