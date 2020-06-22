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
            [
                'ds_questionario' => 'Demissão sem justa causa',
                'ds_questionario_icon' => 'img/icons/sem-justa-causa.png'
            ],
            [
                'ds_questionario' => 'Demissão por justa causa',
                'ds_questionario_icon' => 'img/icons/justa-causa.png'
            ],
            [
                'ds_questionario' => 'Acidente no trabalho',
                'ds_questionario_icon' => 'img/icons/acidente-no-trabalho.png'
            ],
            [
                'ds_questionario' => 'Assédio Moral',
                'ds_questionario_icon' => 'img/icons/assedio-moral.png'
            ]
        ];

        foreach ($questionarios as $questionario) {
            Questionario::create($questionario);
        }
    }
}
