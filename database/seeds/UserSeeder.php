<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@quiz.com.br',
                'password' => bcrypt('123'),
                'remember_token' => Str::random(10)
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
