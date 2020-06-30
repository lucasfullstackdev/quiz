<?php

namespace App\Http\Composers;

use App\Http\Services\MenuService;

class MenuViewComposer
{
    private $menus;

    public function __construct()
    {
        $this->menus = MenuService::allByAccessLevel();
    }

    public function index($view)
    {
        return $view->with('menus', $this->menus);
    }
}
