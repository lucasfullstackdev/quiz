<?php

use Illuminate\Database\Seeder;
use App\Models\TipoPergunta;

class TipoPerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            ['ds_tipo_pergunta' => 'text'],
            ['ds_tipo_pergunta' => 'radio'],
            ['ds_tipo_pergunta' => 'checkbox']
        ];

        foreach ($tipos as $tipo) {
            TipoPergunta::create($tipo);
        }
    }
}
