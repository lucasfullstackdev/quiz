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
            [
                'menu_id' => 1,
                'access_level_id' => 1
            ]
        ];

        foreach ($menuAccessLevels as $menuAccessLevel) {
            MenuAccessLevel::create($menuAccessLevel);
        }

    }
}
