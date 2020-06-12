<?php

namespace App\Http\Services;

// use App\Models\Questionario;
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
                                                     ->select([
                                                        'pergunta_id',
                                                        'ds_pergunta'
                                                     ])
                                                     ->get();
        $perguntaOpcao = PerguntaOpcao::all();

        foreach ($questionarioPergunta as $pergunta)
            $pergunta->opcoes = $perguntaOpcao->where('pergunta_id', $pergunta->pergunta_id);
        
        return $questionarioPergunta;
    }

}
