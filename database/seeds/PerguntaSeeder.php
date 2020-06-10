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
            ['ds_pergunta' => 'Você saiu do trabalho há mais de 02 anos?'],
            ['ds_pergunta' => 'Descreva melhor sua situação no campo abaixo:'],

            // Perguntas para demissão sem justa causa
            ['ds_pergunta' => 'Sua carteira de trabalho era assinada?'],
            ['ds_pergunta' => 'Trabalhou algum período sem carteira assinada?'],
            ['ds_pergunta' => 'Recebeu férias integrais?'],
            ['ds_pergunta' => 'Recebeu férias proporcionais?'],
            ['ds_pergunta' => 'Recebeu 13º salário integral?'],
            ['ds_pergunta' => 'Recebeu 13º salário proporcional?'],
            ['ds_pergunta' => 'Recebeu saldo de salário?'],
            ['ds_pergunta' => 'Sacou FGTS?'],
            ['ds_pergunta' => 'Recebeu a multa de 40% do FGTS?'],
            ['ds_pergunta' => 'Trabalhou no aviso prévio?'],
            ['ds_pergunta' => 'Recebeu aviso prévio?'],
            ['ds_pergunta' => 'Recebeu guias do seguro desemprego?'],
            ['ds_pergunta' => 'Recebeu o pagamento da rescisão dentro do prazo de 10 dias?'],
            ['ds_pergunta' => 'Fazia hora extra?'],
            ['ds_pergunta' => 'Trabalhava em ambiente insalubre ou perigoso?'],
            ['ds_pergunta' => 'Tinha intervalo mínimo de 1 hora para almoço?'],

            // Perguntas para demissão por justa causa
            ['ds_pergunta' => 'Selecione entre as alternativas abaixo o motivo da demissão:'],

            // Perguntas para Acidente no trabalho
            ['ds_pergunta' => 'Marque as situações que ocorreram com você:'],

            // Perguntas para Assédio Moral
            ['ds_pergunta' => 'Marque as situações que ocorreram com você:']
        ];

        foreach ($perguntas as $pergunta) {
            Pergunta::create($pergunta);
        }
    }
}
