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
            ]
        ];

        foreach ($userAccessLevels as $userAccessLevel) {
            UserAccessLevel::create($userAccessLevel);
        }
    }
}
