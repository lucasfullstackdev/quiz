<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Services\HistoricoRespostasService;
use DataTables;
use PDF;
use App\Models\UserAccessLevel;

class HistoricoRespostaController extends Controller
{
    public function index()
    {
        if (!Auth::check())
            return null;

        $accessLevel = UserAccessLevel::find(Auth::user()->id);
        
        if (in_array($accessLevel['access_level_id'], [1, 2])){
            $historicoRespostas = HistoricoRespostasService::all();
        } else {
            $historicoRespostas = HistoricoRespostasService::all(Auth::user()->id);
        }

        foreach ($historicoRespostas as $historicoResposta) {
            $historicoResposta['created_at_'] = date('d/m/Y', strtotime($historicoResposta['created_at']));
        }
        
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
