<?php

use Illuminate\Database\Seeder;
use App\Models\AccessLevel;

class AccessLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            ['ds_access_level' => 'Master'],
            ['ds_access_level' => 'Admin'],
            ['ds_access_level' => 'user']
        ];

        foreach ($levels as $level) {
            AccessLevel::create($level);
        }
    }
}
