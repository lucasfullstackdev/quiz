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
            ['descricao' => 'primeiro direito'],
            ['descricao' => 'segundo direito'],
            ['descricao' => 'terceiro direito'],
            ['descricao' => 'quarto direito'],
            ['descricao' => 'quinto direito'],
            ['descricao' => 'sexto direito'],
            ['descricao' => 'sétimo direito'],
            ['descricao' => 'oitavo direito'],
            ['descricao' => 'nono direito'],
            ['descricao' => 'décimo direito'],
            ['descricao' => 'décimo primeiro direito'],
            ['descricao' => 'décimo segundo direito'],
            ['descricao' => 'décimo terceiro direito'],
            ['descricao' => 'décimo quarto direito'],
            ['descricao' => 'décimo quinto direito'],
            ['descricao' => 'décimo sexto direito'],
            ['descricao' => 'décimo sétimo direito']
        ];

        foreach ($direitos as $direito) {
            Direito::create($direito);
        }
    }
}
