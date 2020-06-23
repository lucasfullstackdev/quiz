<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(QuestionarioSeeder::class);
        $this->call(TipoPerguntaSeeder::class);
        $this->call(PerguntaSeeder::class);
        $this->call(PerguntaOpcaoSeeder::class);
        $this->call(QuestionarioPerguntaSeeder::class);
        $this->call(InformativoSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(AccessLevelSeeder::class);
        $this->call(UserAccessLevelSeeder::class);
        $this->call(MenuAccessLevelSeeder::class);
    }
}
