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
            // Usuários Master
            [
                'name' => 'master',
                'email' => 'master@quiz.com.br',
                'password' => bcrypt('Controle#123'),
                'remember_token' => Str::random(10)
            ],

            [
                'name' => 'admin',
                'email' => 'admin@quiz.com.br',
                'password' => bcrypt('admin@user#2123'),
                'remember_token' => Str::random(10)
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
