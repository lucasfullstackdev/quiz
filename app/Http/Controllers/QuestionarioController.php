<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\QuestionarioService;
use App\Models\HistoricoRespostas;

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
    public function store(Request $request, HistoricoRespostas $historicoRespostas)
    {
        $respostas = $request->except('_token');
        $dataToSend = [];
        
        $respostas = [
            'data' => [
                ['pergunta_id' => 22, 'questionario_id' => 3, 'pergunta_opcao_id' => [67]],
                ['pergunta_id' => 23, 'questionario_id' => 3, 'pergunta_opcao_id' => [68, 69, 70, 71]],
                ['pergunta_id' => 24, 'questionario_id' => 3, 'vl_pergunta' => 'espaço reservado para descrição da situação!' ],
            ]
        ];

        foreach ($respostas['data'] as $resposta) {
            if (isset($resposta['pergunta_opcao_id'])) {
                foreach ($resposta['pergunta_opcao_id'] as $key => $value) {
                    $dataToSend[] = [
                        'questionario_id' => $resposta['questionario_id'],
                        'pergunta_id' => $resposta['pergunta_id'],
                        'pergunta_opcao_id' => $value,
                        'user_id' => 1
                    ];
                }
            } else {
                $dataToSend[] = [
                    'questionario_id' => $resposta['questionario_id'],
                    'pergunta_id' => $resposta['pergunta_id'],
                    'vl_pergunta' => $resposta['vl_pergunta'],
                    'user_id' => 1
                ];
            }
        }

        foreach ($dataToSend as $data) {
            try {
                HistoricoRespostas::Create($data);
            } catch (\Throwable $th) {
               return $th->getMessage();
            }
        }

        // return $dataToSend;
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
            'questionario' => $questionario
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
