<?php

use Illuminate\Database\Seeder;
use App\Models\User;

use Faker\Factory as Faker;

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
            ],
            [
                'name' => 'primeiro usuário',
                'email' => 'primeiro@usuario.com.br',
                'password' => bcrypt('123456789'),
                'remember_token' => Str::random(10)
            ]
        ];

        $faker = Faker::create();
        for ($i = 0; $i < 150; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt('123')
            ]);
        }

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
