<?php

use Illuminate\Database\Seeder;
use App\Models\MenuAccessLevel;

class MenuAccessLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuAccessLevels = [
            // Níveis de acesso [ Master ]
            ['menu_id' => 1, 'access_level_id' => 1 ],
            ['menu_id' => 2, 'access_level_id' => 1],

            // Níveis de acesso [ Admin ]
            ['menu_id' => 1, 'access_level_id' => 2],
            ['menu_id' => 2, 'access_level_id' => 2],
            
            // Níveis de acesso [ Usuário ]
            ['menu_id' => 3, 'access_level_id' => 3],
            ['menu_id' => 4, 'access_level_id' => 3]
        ];

        foreach ($menuAccessLevels as $menuAccessLevel) {
            MenuAccessLevel::create($menuAccessLevel);
        }

    }
}
