<?php

use Illuminate\Database\Seeder;
use App\Models\Direito;

class DireitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $direitos = [
            // Sua carteira de trabalho era assinada? [sim | não][ 1 | 2]
            ['descricao' => 'Tem direito a férias, décimo terceiro salário, fgts, seguro desemprego e etc'],
            ['descricao' => 'Nesse caso você tem que ingressar com uma reclamação trabalhista para requerer todos os seus direitos'],

            // Trabalhou algum período sem carteira assinada? [sim][3]
            ['descricao' => 'Você tem direito a esse período que trabalhou sem registro, como por exemplo décimo terceiro salário, férias e fgts desse período'],

            // Recebeu férias integrais? [não][4]
            ['descricao' => 'Caso não tenha recebido suas férias integrais dentro do período hábil, qual seja, <b class="text-danger">1 ano e 11 meses</b>, o empregador além de pagar as férias integrais ainda pagará uma multa com valor igual ao das férias'],

            // Recebeu férias proporcionais? [não][5]
            ['descricao' => 'Se não recebeu suas férias proporcionais na sua demissão <b class="text-danger">(SEM JUSTA CAUSA)</b>, você terá direito de cobrar na Justiça do Trabalho'],

            // Recebeu 13° salário integral? [não][6]
            ['descricao' => 'Caso não tenha recebido seu décimo terceiro salário integral dentro do período do ano corrente, o empregador pagará uma multa e você terá direito de cobrar com reclamação trabalhista na Justiça do Trabalho'],

            // Recebeu 13º salário proporcional? [não][7]
            ['descricao' => 'Se não recebeu suas férias proporcionais na sua demissão <b class="text-danger">(SEM JUSTA CAUSA)</b>, você terá direito de cobrar na Justiça do Trabalho'],

            // Recebeu saldo de salário? [não][8]
            ['descricao' => 'O saldo de salário é um direito líquido e certo, pois você trabalhou e tem direito de receber. Caso o seu empregador se recuse, você poderá cobrar com uma reclamação trabalhista na Justiça do Trabalho'],

            // Sacou FGTS? [não][9]
            ['descricao' => 'Se sua demissão foi <b class="text-danger">SEM JUSTA CAUSA</b>, o seu empregador tem que fazer as liberações mediante uma chave em conjunto com seu <b class="text-danger">TRCT</b>. Caso seu empregador não ternha fornecido os documentos necessários para o saque, será necessário ingressar com uma reclamação trabalhista na Justiça do Trabalho'],

            // Recebeu a multa de 40% do FGTS? [não][10]
            ['descricao' => 'Se não recebeu a multa dos 40% é porque o seu empregador não depositou. Dessa forma tem que entrar com a reclamação trabalhista na Justiça do Trabalho para cobrar a multa'],
            
            // Trabalhou no aviso prévio? [sim | não][11 | 12]
            ['descricao' => 'Se trabalhou o aviso prévio, o empregador tem que pagar. A suas rescisão deve ser paga no primeiro dia últil subsequente'],
            ['descricao' => 'Nesse caso o seu aviso prévio deve ter sido indenizado e a reclamada tem prazo de 10 dias para fazer o pagamento junto com o <b class="text-danger">TRCT</b>'],

            // Recebeu aviso prévio? [não][13]
            ['descricao' => 'Nesse caso terá que entrar com uma reclamação trabalhista na Justiça do Trabalho para cobrar'],

            // Recebeu guias do seguro desemprego? [não][14]
            ['descricao' => 'Se a sua demissão foi <b class="text-danger">SEM JUSTA CAUSA</b> e o seu empregador não entregou as guias, você tem que entrar com uma reclamação trabalhista na Justiça do Trabalho'],
            
            // Recebeu o pagamento da rescisão dentro do prazo de 10 dias? [não][15]
            ['descricao' => 'O seu empregador pagará a multa decorrente do atraso no pagamento das verbas rescisórias, estabelecida pelo <b class="text-danger">parágrafo 8º do artigo 477 da CLT</b>'],

            // Fazia hora extra? [sim | não sei][16 | 17]
            ['descricao' => 'Se você fazia horas extras então o seu empregador tem que fazer o pagamento das mesmas. O valor da hora extra varia de acordo com a conveção coletiva da categoria. Você tem que consultar o sindicato da categoria para pegar a informação correta'],
            ['descricao' => 'De acordo com a Constituição, o limite máximo da jornada de trabalho é 8 horas diárias e 44 horas semanais. Se você passa dessa quantidade de horas você está fazendo hora extra'],

            // Trabalhava em ambiente insalubre ou perigoso? [sim][18]
            ['descricao' => 'Se você trabalhava em local insalubre e ou perigoso terá direito ao um adicional que pode variar entre 10% a 40%'],

            // Tinha intervalo mínimo de 1 hora para almoço? [não][19]
            ['descricao' => 'O intervalo de, ao menos, uma hora, e, no máximo, 2 horas, para todo emprego cuja duração seja maior que 6 horas. Em se tratando de jornadas de mais de 4 horas e menores ou iguais a 6 horas, é de 15 minutos. Caso você não tenha tirado esse intervalo você tem direito a cobrar horas extras junto a Justiça do trabalho'],
        ];

        foreach ($direitos as $direito) {
            Direito::create($direito);
        }
    }
}
