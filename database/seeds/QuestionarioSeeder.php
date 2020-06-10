<?php

use Illuminate\Database\Seeder;
use App\Models\Questionario;

class QuestionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionarios = [
            ['ds_questionario' => 'Demissão sem justa causa'],
            ['ds_questionario' => 'Demissão por justa causa'],
            ['ds_questionario' => 'Acidente no trabalho'],
            ['ds_questionario' => 'Assédio Moral']
        ];

        foreach ($questionarios as $questionario) {
            Questionario::create($questionario);
        }
    }
}
