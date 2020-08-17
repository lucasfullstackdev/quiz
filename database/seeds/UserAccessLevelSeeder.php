<?php

use Illuminate\Database\Seeder;
use App\Models\UserAccessLevel;

class UserAccessLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAccessLevels = [
            [
                'user_id' => 1,
                'access_level_id' => 1
            ],
            [
                'user_id' => 2,
                'access_level_id' => 2
            ],
            [
                'user_id' => 3,
                'access_level_id' => 3
            ]
        ];

        foreach ($userAccessLevels as $userAccessLevel) {
            UserAccessLevel::create($userAccessLevel);
        }
    }
}
