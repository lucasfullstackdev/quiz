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
        if (!Auth::check())
            return null;

        $user = UserAccessLevel::where('user_id', Auth::user()->id)->select('access_level_id')->first();
        $menuAccessLevel = MenuAccessLevel::where('access_level_id', $user->access_level_id)->select('menu_id')->get();

        $menus = Menu::whereIn('id', $menuAccessLevel)->get();
        // dd(response()->json($menus));
        
        return $menus;
    }
}
