<?php

use Illuminate\Database\Seeder;
use App\Models\QuestionarioPergunta;

class QuestionarioPerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionarioPerguntas = [
            /**
             * Perguntas referentes ao primeiro questionário [Demissão sem justa causa]
             * =========================================================================================
             */
            ['questionario_id' => 1, 'pergunta_id' => 1],
            ['questionario_id' => 1, 'pergunta_id' => 3],
            ['questionario_id' => 1, 'pergunta_id' => 4],
            ['questionario_id' => 1, 'pergunta_id' => 5],
            ['questionario_id' => 1, 'pergunta_id' => 6],
            ['questionario_id' => 1, 'pergunta_id' => 7],
            ['questionario_id' => 1, 'pergunta_id' => 8],
            ['questionario_id' => 1, 'pergunta_id' => 9],
            ['questionario_id' => 1, 'pergunta_id' => 10],
            ['questionario_id' => 1, 'pergunta_id' => 11],
            ['questionario_id' => 1, 'pergunta_id' => 12],
            ['questionario_id' => 1, 'pergunta_id' => 13],
            ['questionario_id' => 1, 'pergunta_id' => 14],
            ['questionario_id' => 1, 'pergunta_id' => 15],
            ['questionario_id' => 1, 'pergunta_id' => 16],
            ['questionario_id' => 1, 'pergunta_id' => 17],
            ['questionario_id' => 1, 'pergunta_id' => 18],
            ['questionario_id' => 1, 'pergunta_id' => 2],

            /**
             * Perguntas referentes ao segundo questionário [Demissão por justa causa]
             * =========================================================================================
             */
            ['questionario_id' => 2, 'pergunta_id' => 1],
            ['questionario_id' => 2, 'pergunta_id' => 19],
            ['questionario_id' => 2, 'pergunta_id' => 2],
            
            /**
             * Perguntas referentes ao terceiro questionário [Acidente no trabalho]
             * =========================================================================================
             */
            ['questionario_id' => 3, 'pergunta_id' => 1],
            ['questionario_id' => 3, 'pergunta_id' => 20],
            ['questionario_id' => 3, 'pergunta_id' => 2],

            /**
             * Perguntas referentes ao quarto questionário [Assédio Moral]
             * =========================================================================================
             */
            ['questionario_id' => 4, 'pergunta_id' => 1],
            ['questionario_id' => 4, 'pergunta_id' => 21],
            ['questionario_id' => 4, 'pergunta_id' => 2]
        ];

        foreach ($questionarioPerguntas as $questionarioPergunta) {
            QuestionarioPergunta::create($questionarioPergunta);
        }
    }
}
