<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            // Listagem de respostas dos usuários [owner => admin]
            [
                'ds_menu' => 'Questionários',
                'ds_menu_icon' => 'fa fa-paper-plane',
                'ds_menu_route' => 'dashboard.list-respostas'
            ],
            [
                'ds_menu' => 'Usuários',
                'ds_menu_icon' => 'fa fa-users',
                'ds_menu_route' => 'dashboard.list-usuarios'
            ],
            
            // Listagem de respostas do usuário [owner => user]
            [
                'ds_menu' => 'Perfil',
                'ds_menu_icon' => 'fa fa-id-card',
                'ds_menu_route' => 'dashboard.perfil'
            ],
            [
                'ds_menu' => 'Questionários',
                'ds_menu_icon' => 'fa fa-paper-plane',
                'ds_menu_route' => 'dashboard.list-respostas'
            ]
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);            
        }
    }
}
