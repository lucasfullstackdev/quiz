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
                'ds_menu_route' => 'questionario.respostas'
            ],
            
            // Listagem de respostas do usuário [owner => user]
            [
                'ds_menu' => 'Questionários',
                'ds_menu_icon' => 'fa fa-paper-plane',
                'ds_menu_route' => 'questionario.resposta'
            ]
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);            
        }
    }
}
