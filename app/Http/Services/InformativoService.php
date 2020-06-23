<?php

namespace App\Http\Services;

use App\Models\Informativo;

class InformativoService
{
    public static function find($id)
    {
        $info = Informativo::find($id);

        return $info;
    }
}
