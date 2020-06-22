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
                'ds_informativo_view' => 'informativo',
                'questionario_id' => 3,
                'sn_ultimo' => 1
            ]
        ];

        foreach ($informativos as $informativo) {
            Informativo::create($informativo);
        }
    }
}
