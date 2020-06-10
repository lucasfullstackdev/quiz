<?php

use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perguntas = [
            // Pergunas comuns a todos os questionários
            [
                'ds_pergunta' => 'Você saiu do trabalho há mais de 02 anos?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Descreva melhor sua situação no campo abaixo:',
                'tipo_pergunta_id' => 1
            ],

            // Perguntas para demissão sem justa causa
            [
                'ds_pergunta' => 'Sua carteira de trabalho era assinada?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Trabalhou algum período sem carteira assinada?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu férias integrais?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu férias proporcionais?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu 13º salário integral?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu 13º salário proporcional?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu saldo de salário?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Sacou FGTS?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu a multa de 40% do FGTS?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Trabalhou no aviso prévio?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu aviso prévio?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu guias do seguro desemprego?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Recebeu o pagamento da rescisão dentro do prazo de 10 dias?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Fazia hora extra?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Trabalhava em ambiente insalubre ou perigoso?',
                'tipo_pergunta_id' => 2
            ],
            [
                'ds_pergunta' => 'Tinha intervalo mínimo de 1 hora para almoço?',
                'tipo_pergunta_id' => 2
            ],

            // Perguntas para demissão por justa causa
            [
                'ds_pergunta' => 'Selecione entre as alternativas abaixo o motivo da demissão:',
                'tipo_pergunta_id' => 2
            ],

            // Perguntas para Acidente no trabalho
            [
                'ds_pergunta' => 'Marque as situações que ocorreram com você:',
                'tipo_pergunta_id' => 3
            ],

            // Perguntas para Assédio Moral
            [
                'ds_pergunta' => 'Marque as situações que ocorreram com você:',
                'tipo_pergunta_id' => 3
            ]
        ];

        foreach ($perguntas as $pergunta) {
            Pergunta::create($pergunta);
        }
    }
}
