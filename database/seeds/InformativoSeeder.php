<?php

use Illuminate\Database\Seeder;
use App\Models\Informativo;

class InformativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $informativos = [
            /**
             * Informativos para o primeiro questionario
             */
            [
                'ds_informativo_view' => "info.questionario-1-inicio",
                'questionario_id' => 1,
                'sn_primeiro' => 1
            ],
            [
                'ds_informativo_view' => "info.questionario-1-fim",
                'questionario_id' => 1,
                'sn_ultimo' => 0
            ],

            /**
             * Informativos para o segundo questionario
             */
            [
                'ds_informativo_view' => "info.questionario-2-inicio",
                'questionario_id' => 2,
                'sn_primeiro' => 1
            ],
            [
                'ds_informativo_view' => "info.questionario-2-fim",
                'questionario_id' => 2,
                'sn_ultimo' => 0
            ],

            /**
             * Informativos para o terceiro questionario
             */
            [
                'ds_informativo_view' => "info.questionario-3-inicio",
                'questionario_id' => 3,
                'sn_primeiro' => 1
            ],
            [
                'ds_informativo_view' => "info.questionario-3-fim",
                'questionario_id' => 3,
                'sn_ultimo' => 0
            ],

            /**
             * Informativos para o quarto questionario
             */
            [
                'ds_informativo_view' => "info.questionario-4-inicio",
                'questionario_id' => 4,
                'sn_primeiro' => 1
            ],
            [
                'ds_informativo_view' => "info.questionario-4-fim",
                'questionario_id' => 4,
                'sn_ultimo' => 0
            ],
        ];

        foreach ($informativos as $informativo) {
            Informativo::create($informativo);
        }
    }
}
