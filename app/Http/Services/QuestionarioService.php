<?php

namespace App\Http\Services;

use App\Models\Questionario;
use App\Models\QuestionarioPergunta;
use App\Models\Pergunta;
use App\Models\PerguntaOpcao;

class QuestionarioService
{
    private static $id;

    public static function find(String $id)
    {
        self::$id = $id;

        $questionarioPergunta = QuestionarioPergunta::where('questionario_id', self::$id)
                                                     ->leftJoin('perguntas as pg', 'pg.id', '=', 'questionario_perguntas.pergunta_id')
                                                     ->leftJoin('questionarios as qt', 'qt.id', '=', 'questionario_perguntas.questionario_id')
                                                     ->leftJoin('tipo_perguntas as tp', 'tp.id', '=', 'pg.tipo_pergunta_id')
                                                     ->select([
                                                        'questionario_id',
                                                        'ds_questionario',
                                                        'pergunta_id',
                                                        'ds_tipo_pergunta',
                                                        'sn_primeiro',
                                                        'sn_ultimo',
                                                        'ds_pergunta'
                                                     ])
                                                     ->get();
        $perguntaOpcao = PerguntaOpcao::all();

        foreach ($questionarioPergunta as $pergunta)
            $pergunta->opcoes = $perguntaOpcao->where('pergunta_id', $pergunta->pergunta_id);
        
        return $questionarioPergunta;
    }

    public static function allWithInfo()
    {
        $questionarios = Questionario::leftJoin('informativos as info', 'info.questionario_id', '=', 'questionarios.id')
                                     ->select([
                                         '*',
                                         'info.id as info_id'
                                     ])
                                     ->get();

        return $questionarios;
    }

}
