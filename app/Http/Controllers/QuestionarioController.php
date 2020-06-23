<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\QuestionarioService;
// use App\Models\HistoricoRespostas;
use App\Http\Services\HistoricoRespostasService;
use App\Models\Informativo;

class QuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $respostas = $request->except(['_token', 'questionario_id']);
        // $respostas = [
        //     'data' => [
        //         ['pergunta_id' => 22, 'questionario_id' => 3, 'pergunta_opcao_id' => [67]],
        //         ['pergunta_id' => 23, 'questionario_id' => 3, 'pergunta_opcao_id' => [68, 69, 70, 71]],
        //         ['pergunta_id' => 24, 'questionario_id' => 3, 'vl_pergunta' => 'espaço reservado para descrição da situação!' ],
        //     ]
        // ];

        $response = HistoricoRespostasService::prep($respostas)->send();
        
        // if ($response['success'] == true)
        //     $response['informativo_id'] = 2;

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questionario = QuestionarioService::find($id);
        
        return view('pages.teste', [
            'questionario' => $questionario,
            'questionario_id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
