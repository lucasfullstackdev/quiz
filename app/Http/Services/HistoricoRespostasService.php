<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\HistoricoRespostas;
use App\Models\User;
use App\Models\Questionario;

use Message;
use DB;

class HistoricoRespostasService
{
    public static $dataToSend;
    private static $respostas;
    private static $instance;

    private static function getInstance()
    {
        if(self::$instance === null)
            self::$instance = new self;

        return self::$instance;
    }

    public static function prep($respostas)
    {
        self::$dataToSend = [];
        self::$respostas = $respostas;

        foreach (self::$respostas['data'] as $resposta) {
            if (isset($resposta['pergunta_opcao_id'])) {
                foreach ($resposta['pergunta_opcao_id'] as $key => $value) {
                    self::$dataToSend[] = [
                        'questionario_id' => $resposta['questionario_id'],
                        'pergunta_id' => $resposta['pergunta_id'],
                        'pergunta_opcao_id' => $value,
                        'user_id' => Auth::user()->id
                    ];
                }
            } else {
                self::$dataToSend[] = [
                    'questionario_id' => $resposta['questionario_id'],
                    'pergunta_id' => $resposta['pergunta_id'],
                    'vl_pergunta' => $resposta['vl_pergunta'],
                    'user_id' => Auth::user()->id
                ];
            }
        }

       return self::getInstance(); 
    }

    public static function send()
    {
        DB::beginTransaction();
        try {
            foreach (self::$dataToSend as $data)
                HistoricoRespostas::Create($data);
            
            DB::commit();
            Auth::logout();
                        
            return Message::success("ok", 201)->bind(self::$dataToSend);
        } catch (\Throwable $th) {
            DB::rollback();
            return Message::error($th);
        }
    }

    public static function all(){
        $historicoRespostas = HistoricoRespostas::select(['questionario_id', 'user_id', 'created_at'])->groupBy(['questionario_id', 'user_id', 'created_at'])->get();

        foreach ($historicoRespostas as $historicoResposta) {
            $historicoResposta['user_name'] = User::find($historicoResposta->user_id)->name;
            $historicoResposta['questionario_description'] = Questionario::find($historicoResposta->questionario_id)->ds_questionario;
        }
        
        return $historicoRespostas;
    }

    public static function findByQuestionarioAndUser($questionario_id, $user_id, $created_at)
    {
        $historicoRespostas = DB::select(
            "select name,
                    email,
                    ds_questionario,
                    ds_pergunta,
                    vl_pergunta,
                    ( select group_concat( ds_pergunta_opcao separator '[[--]]' )
                        from pergunta_opcoes
					   where id in ( select pergunta_opcao_id 
									   from historico_respostas as sub
									  where sub.pergunta_id = base.pergunta_id
                                    )
                    ) opcoes,
                    created_at
               from ( select user_id,
                             questionario_id,
                             pergunta_id,
                             vl_pergunta,
                             created_at
                        from historico_respostas
                       where user_id = :user_id
                         and questionario_id = :questionario_id
                         and created_at = :created_at
                    group by user_id, questionario_id, pergunta_id, vl_pergunta, created_at
                    ) base
          left join ( select id,
                             ds_questionario
                        from questionarios
                    ) as quiz on quiz.id = base.questionario_id
          left join ( select id,
                             ds_pergunta
                        from perguntas
                    ) as pgt on pgt.id = base.pergunta_id
          left join ( select id,
                             name,
                             email
                        from users
                    ) as users on users.id = base.user_id",
                    [
                        'user_id' => $user_id,
                        'questionario_id' => $questionario_id,
                        'created_at' => $created_at
                    ]
        );

        $removeProperties = ['name', 'email', 'created_at'];
        foreach ($historicoRespostas as $historicoResposta) {

            $response['user']['name'] = $historicoResposta->name;
            $response['user']['email'] = $historicoResposta->email;
            $response['questionario']['ds_questionario'] = $historicoResposta->ds_questionario;
            $response['questionario']['created_at'] = date('d/m/Y', strtotime($historicoResposta->created_at));

            foreach ($removeProperties as $removeProperty)
                unset($historicoResposta->$removeProperty);
    
            $response['data'][] = [
                'ds_pergunta' => $historicoResposta->ds_pergunta,
                'vl_pergunta' => $historicoResposta->vl_pergunta,
                'opcoes' => explode('[[--]]', $historicoResposta->opcoes),
            ];
        }

        return $response;
    }
}
