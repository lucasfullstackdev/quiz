<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\HistoricoRespostasService;
use DataTables;
use PDF;

class HistoricoRespostaController extends Controller
{
    public function index()
    {
        $historicoRespostas = HistoricoRespostasService::all();
        // $response = [];

        foreach ($historicoRespostas as $historicoResposta) {
            $historicoResposta['created_at_'] = date('d/m/Y', strtotime($historicoResposta['created_at']));
            // $response[] = [
            //     'questionario_id' => $historicoResposta['questionario_id'],
            //     'user_id' => $historicoResposta['user_id'],
            //     'created_at' => date('d/m/Y', strtotime($historicoResposta['created_at'])),
            //     'user_name' => $historicoResposta['user_name'],
            //     'questionario_description' => $historicoResposta['questionario_description']
            // ];
        }
        
        // $historicoResposta['created_at_'] = date('d/m/Y', strtotime($historicoResposta['created_at']));

        $datatable = Datatables::of($historicoRespostas);

        return $datatable->blacklist(['view-pdf'])->make(true);
    }

    public function print($questionario_id, $user_id, $created_at)
    {
        $historicoRespostas = HistoricoRespostasService::findByQuestionarioAndUser($questionario_id, $user_id, $created_at);

        return PDF::loadView('prints.questionario', [
            "historicoRespostas" => $historicoRespostas
        ])->stream();
    }
}
