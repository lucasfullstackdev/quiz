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
        $this->call(QuestionarioSeeder::class);
        $this->call(TipoPerguntaSeeder::class);
        $this->call(PerguntaSeeder::class);
        $this->call(PerguntaOpcaoSeeder::class);
    }
}