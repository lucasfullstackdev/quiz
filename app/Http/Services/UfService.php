<?php

namespace App\Http\Services;

use App\Models\Uf;

class UfService
{
    public static function all()
    {
        return Uf::all();
    }    
}
