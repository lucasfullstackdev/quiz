<?php

namespace App\Http\Services;
use App\Models\Menu;

class MenuService
{
    public static function all()
    {
        $menus = Menu::all();

        return $menus;
    }
}
