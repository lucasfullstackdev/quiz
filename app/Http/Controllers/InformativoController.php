<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\InformativoService;

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

    public function showByPost(Request $request)
    {
        $info = InformativoService::find($request->input('informativo_id'));

        return $this->show($info['ds_informativo_view'], $request->input('questionario_id'));
    }

    public function showByGet($informativo_id)
    {
        $info = InformativoService::find($informativo_id);
        
        return $this->show($info['ds_informativo_view']);
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
