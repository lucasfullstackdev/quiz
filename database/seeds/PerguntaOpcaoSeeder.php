<?php

use Illuminate\Database\Seeder;
use App\Models\PerguntaOpcao;

class PerguntaOpcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opcoes = [
            /**
             * Perguntas para demissão sem justa causa
             * =========================================================
             */
            // Você saiu do trabalho há mais de 02 anos?
            [
                'pergunta_id' => 1,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 2
            ],
            [
                'pergunta_id' => 1,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 2
            ],

            // Sua carteira era assinada?
            [
                'pergunta_id' => 2,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 3,
                'direito_id' => 1
            ],
            [
                'pergunta_id' => 2,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 3,
                'direito_id' => 2
            ],
            [
                'pergunta_id' => 2,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 3
            ],

            // Trabalhou algum período sem carteira assinada?
            [
                'pergunta_id' => 3,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 4,
                'direito_id' => 3
            ],
            [
                'pergunta_id' => 3,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 4
            ],
            [
                'pergunta_id' => 3,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 4
            ],

            // Recebeu férias integrais?
            [
                'pergunta_id' => 4,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 5
            ],
            [
                'pergunta_id' => 4,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 5,
                'direito_id' => 4
            ],
            [
                'pergunta_id' => 4,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 5
            ],

            // Recebeu férias proporcionais?
            [
                'pergunta_id' => 5,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 6
            ],
            [
                'pergunta_id' => 5,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 6,
                'direito_id' => 5
            ],
            [
                'pergunta_id' => 5,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 6
            ],

            // Recebeu 13º salário integral?
            [
                'pergunta_id' => 6,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 7
            ],
            [
                'pergunta_id' => 6,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 7,
                'direito_id' => 6
            ],
            [
                'pergunta_id' => 6,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 7
            ],

            // Recebeu 13º salário proporcional?
            [
                'pergunta_id' => 7,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 8
            ],
            [
                'pergunta_id' => 7,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 8,
                'direito_id' => 7
            ],
            [
                'pergunta_id' => 7,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 8
            ],

            // Recebeu saldo de salário?
            [
                'pergunta_id' => 8,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 9
            ],
            [
                'pergunta_id' => 8,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 9,
                'direito_id' => 8
            ],
            [
                'pergunta_id' => 8,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 9
            ],

            // Sacou FGTS?
            [
                'pergunta_id' => 9,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 10
            ],
            [
                'pergunta_id' => 9,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 10,
                'direito_id' => 9
            ],
            [
                'pergunta_id' => 9,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 10
            ],

            // Recebeu a multa de 40% do FGTS?
            [
                'pergunta_id' => 10,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 11
            ],
            [
                'pergunta_id' => 10,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 11,
                'direito_id' => 10
            ],
            [
                'pergunta_id' => 10,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 11
            ],

            // Trabalhou no aviso prévio?
            [
                'pergunta_id' => 11,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 12,
                'direito_id' => 11
            ],
            [
                'pergunta_id' => 11,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 12,
                'direito_id' => 12
            ],
            [
                'pergunta_id' => 11,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 12
            ],

            // Recebeu aviso prévio?
            [
                'pergunta_id' => 12,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 13
            ],
            [
                'pergunta_id' => 12,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 13,
                'direito_id' => 13
            ],
            [
                'pergunta_id' => 12,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 13
            ],

            // Recebeu guias do seguro desemprego?
            [
                'pergunta_id' => 13,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 14
            ],
            [
                'pergunta_id' => 13,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 14,
                'direito_id' => 14
            ],
            [
                'pergunta_id' => 13,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 14
            ],

            // Recebeu o pagamento da rescisão dentro do prazo de 10 dias?
            [
                'pergunta_id' => 14,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 15
            ],
            [
                'pergunta_id' => 14,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 15,
                'direito_id' => 15
            ],
            [
                'pergunta_id' => 14,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 15
            ],

            // Fazia hora extra?
            [
                'pergunta_id' => 15,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 16,
                'direito_id' => 16
            ],
            [
                'pergunta_id' => 15,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 16
            ],
            [
                'pergunta_id' => 15,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 16,
                'direito_id' => 17
            ],

            // Trabalhava em ambiente insalubre ou perigoso?
            [
                'pergunta_id' => 16,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 17,
                'direito_id' => 18
            ],
            [
                'pergunta_id' => 16,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 17
            ],
            [
                'pergunta_id' => 16,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 17
            ],

            // Tinha intervalo mínimo de 1 hora para almoço?
            [
                'pergunta_id' => 17,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 18
            ],
            [
                'pergunta_id' => 17,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 18,
                'direito_id' => 19
            ],
            [
                'pergunta_id' => 17,
                'ds_pergunta_opcao' => 'Não Sei',
                'next_pergunta_id' => 18
            ],
            
            /**
             * Perguntas para demissão por justa causa
             * =========================================================
             */
            // Você saiu do trabalho há mais de 02 anos?
            [
                'pergunta_id' => 19,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 20
            ],
            [
                'pergunta_id' => 19,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 20
            ],

            // Selecione entre as alternativas abaixo o motivo da demissão:
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Cometeu alguma fraude, desonestidade, ou má-fe para obter vantagem para si ou para outra pessoa?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Cometeu atos de ofensa ao pudor, pornografia, obsenidade ou desrespeito aos colegas de trabalho e a empresa? ',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Cometeu assédio moral ou descumpriu as regras internas da empresa? ',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Exerceu alguma atividade concorrente do ramo de atividade do seu emprego? ',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Sofreu condenação criminal? ',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Cometeu frequentes faltas leves?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Chegou ao trabalho embriagado?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Repassou algum segredo da empresa a terceiros?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Desobedeceu ordem específica verbal ou escrita do seu chefe?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Faltou ao trabalho mais de 30 dias sem justificativas?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Agrediu fisicamente alguém da empresa durante o horário de trabalho?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Praticou calunia, difamação ou injuria contra seu chefe ou colega de trabalho?',
                'next_pergunta_id' => 21
            ],
            [
                'pergunta_id' => 20,
                'ds_pergunta_opcao' => 'Outro motivo',
                'next_pergunta_id' => 21
            ],

            /**
             * Perguntas para acidente de trabalho
             * =========================================================
             */
            // Você saiu do trabalho há mais de 02 anos?
            [
                'pergunta_id' => 22,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 23
            ],
            [
                'pergunta_id' => 22,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 23
            ],

            // Marque as situações que ocorreram com você:
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'Pelo exercício do seu trabalho a serviço da empresa, houve lesão corporal ou perturbação funcional que causou a morte do empregado?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'O trabalho exercido na empresa causou lesão corporal com a perda permanente ou temporária da sua capacidade para o trabalho?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'O trabalho exercido na empresa causou lesão corporal com a redução permanente ou temporária da sua capacidade para o trabalho?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'Você foi alvo de fofocas nos corredores da empresa, de modo que sua honra foi atingida e que seus superiores tiveram conhecimento e/ou fizeram parte da fofoca?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'Você contraiu doença ocupacional na empresa por conta de movimentos repetitivos?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'Você sofreu acidente de trabalho do tipo: alguma queda ou  acidente de trânsito a serviço da empresa? ',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'Você ficou afastado do trabalho por mais de 15 (quinze) dias por conta de doença contraída na empresa?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'Você está recebendo Auxílio Doença pelo INSS?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'O INSS cancelou ou negou seu benefício e a empresa não aceita você voltar alegando que você ainda está doente?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'Você foi readaptado em outra função no trabalho?',
                'next_pergunta_id' => 24
            ],
            [
                'pergunta_id' => 23,
                'ds_pergunta_opcao' => 'A empresa emitiu a Comunicação de Acidente de Trabalho – CAT?',
                'next_pergunta_id' => 24
            ],

            /**
             * Perguntas para assédio moral
             * =========================================================
             */
            // Você saiu do trabalho há mais de 02 anos?
            [
                'pergunta_id' => 25,
                'ds_pergunta_opcao' => 'Sim',
                'next_pergunta_id' => 26
            ],
            [
                'pergunta_id' => 25,
                'ds_pergunta_opcao' => 'Não',
                'next_pergunta_id' => 26
            ],

            // Marque as situações que ocorreram com você:
            [
                'pergunta_id' => 26,
                'ds_pergunta_opcao' => 'Você foi ofendido constantemente, por repetidas vezes, durante seu horário de trabalho e na presença do(s) seu(s) colega(s) de trabalho?',
                'next_pergunta_id' => 27
            ],
            [
                'pergunta_id' => 26,
                'ds_pergunta_opcao' => 'Você foi agredido constantemente, por repetidas vezes, durante seu horário de trabalho e na presença do(s) seu(s) colega(s) de trabalho?',
                'next_pergunta_id' => 27
            ],
            [
                'pergunta_id' => 26,
                'ds_pergunta_opcao' => 'Você foi alvo de apelidos, piadas e risadas, dos colegas ou do seu superior/ chefe/ gerente/ supervisor/ patrão, por repetidas vezes, durante seu horário de trabalho?',
                'next_pergunta_id' => 27
            ],
            [
                'pergunta_id' => 26,
                'ds_pergunta_opcao' => 'Você foi alvo de fofocas nos corredores da empresa, de modo que sua honra foi atingida e que seus superiores tiveram conhecimento e/ou fizeram parte da fofoca?',
                'next_pergunta_id' => 27
            ],
            [
                'pergunta_id' => 26,
                'ds_pergunta_opcao' => 'A empresa ou seu superior deixou você “de escanteio”, sem nenhuma função durante todo o expediente, por mero capricho, ou seja, fez isso de propósito?',
                'next_pergunta_id' => 27
            ],
            [
                'pergunta_id' => 26,
                'ds_pergunta_opcao' => 'Você sofreu pressão ou coação psicológica que resultaram em você preferir entrar no programa de demissão voluntária?',
                'next_pergunta_id' => 27
            ],
            [
                'pergunta_id' => 26,
                'ds_pergunta_opcao' => 'Você sofreu outro tipo de assédio moral, por exemplo, foi vítima de assédio sexual?',
                'next_pergunta_id' => 27
            ]
        ];
    
        foreach ($opcoes as $opcao) {
            PerguntaOpcao::create($opcao);
        }
    }
}
