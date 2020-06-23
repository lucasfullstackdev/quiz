<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\HistoricoRespostasService;
use DataTables;

class HistoricoRespostaController extends Controller
{
    public function index()
    {
        $historicoRespostas = HistoricoRespostasService::all();
        $datatable = Datatables::of($historicoRespostas);

        return $datatable->blacklist(['action'])->make(true);
    }
}
