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
            [
                'ds_informativo_view' => "info.questionario-inicio"
            ],
            [
                'ds_informativo_view' => "info.questionario-fim"
            ],
            [
                'ds_informativo_view' => "info.questionario-sem-direitos-trabalhistas"
            ],
            [
                'ds_informativo_view' => "info.questionario-direitos-trabalhistas"
            ],
        ];

        foreach ($informativos as $informativo) {
            Informativo::create($informativo);
        }
    }
}
