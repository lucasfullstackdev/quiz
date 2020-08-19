<?php

namespace App\Http\Services;

use App\Models\PerguntaOpcao;

class PerguntaOpcaoService
{
    public static function all()
    {
        return PerguntaOpcao::all();
    }
}
