<?php

namespace App\Http\Services;

use App\Models\Direito;

class DireitoService
{
    // private static $instance;

    // private static function getInstance()
    // {
    //     if (self::$instance === null)
    //         self::$instance = new self;

    //     return self::$instance;
    // }

    public static function all()
    {
        return Direito::all();
    }


}
