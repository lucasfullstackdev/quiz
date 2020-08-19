<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Services\DireitoService;
use App\Http\Services\InformativoService;
use App\Http\Services\PerguntaOpcaoService;
use App\Http\Services\HistoricoRespostasService;

class InformativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($view, $questionario_id=null)
    {
        return view($view, [ 'questionario_id' => $questionario_id ]);
    }

    public function showWithHistory(Request $request, $informativo_id)
    {
        $info = InformativoService::find($informativo_id);
        $respostas = HistoricoRespostasService::getBySku($request->input('historico_sku'));
        $opcoes = PerguntaOpcaoService::all();
        $direitos = DireitoService::all();
        
        foreach ($respostas as $resposta) {
            $opcao = $opcoes->find($resposta["pergunta_opcao_id"]);
            if (!empty($opcao)) {
                $direito = $direitos->find($opcao['direito_id']);

                if (!empty($direito))
                    $resposta['direito'] = $direito['descricao'];
            }
        }

       return view($info['ds_informativo_view'], [ 'respostas' => $respostas ]);
    }

    public function showByPost(Request $request)
    {
        $questionario_id = $request->input('questionario_id');
        $info = InformativoService::find($request->input('informativo_id'));

        return $this->show(
            $info['ds_informativo_view'],
            $questionario_id
        );
    }

    // public function showByGet($informativo_id)
    // {
    //     $info = InformativoService::find($informativo_id);
    //     return $this->show($info['ds_informativo_view']);
    // }

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
