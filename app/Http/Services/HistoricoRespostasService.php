<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\HistoricoRespostas;
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
        $historicoRespostas = HistoricoRespostas::all();
        
        return $historicoRespostas;
    }
}
