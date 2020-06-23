<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\MenuAccessLevel;
use App\Models\UserAccessLevel;

class MenuService
{
    public static function all()
    {
        $menus = Menu::all();

        return $menus;
    }

    public static function allByAccessLevel()
    {
        $user = UserAccessLevel::where('user_id', 1)->select('access_level_id')->first();
        $menuAccessLevel = MenuAccessLevel::where('access_level_id', $user->access_level_id)->select('menu_id')->get();

        $menus = Menu::whereIn('id', $menuAccessLevel)->get();
        
        return $menus;
    }
}
