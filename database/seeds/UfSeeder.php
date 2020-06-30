<?php

use Illuminate\Database\Seeder;
use App\Models\Uf;

class UfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ['titulo' => 'Acre', 'slug' => 'AC'],
            ['titulo' => 'Alagoas', 'slug' => 'AL'],
            ['titulo' => 'Amapá', 'slug' => 'AP'],
            ['titulo' => 'Amazonas', 'slug' => 'AM'],
            ['titulo' => 'Bahia', 'slug' => 'BA'],
            ['titulo' => 'Ceará', 'slug' => 'CE'],
            ['titulo' => 'Distrito Federal', 'slug' => 'DF'],
            ['titulo' => 'Espírito Santo', 'slug' => 'ES'],
            ['titulo' => 'Goiás', 'slug' => 'GO'],
            ['titulo' => 'Maranhão', 'slug' => 'MA'],
            ['titulo' => 'Mato Grosso', 'slug' => 'MT'],
            ['titulo' => 'Mato Grosso do Sul', 'slug' => 'MS'],
            ['titulo' => 'Minas Gerais', 'slug' => 'MG'],
            ['titulo' => 'Pará', 'slug' => 'PA'],
            ['titulo' => 'Paraíba', 'slug' => 'PB'],
            ['titulo' => 'Paraná', 'slug' => 'PR'],
            ['titulo' => 'Pernambuco', 'slug' => 'PE'],
            ['titulo' => 'Piauí', 'slug' => 'PI'],
            ['titulo' => 'Rio de Janeiro', 'slug' => 'RJ'],
            ['titulo' => 'Rio Grande do Norte', 'slug' => 'RN'],
            ['titulo' => 'Rio Grande do Sul', 'slug' => 'RS'],
            ['titulo' => 'Rondônia', 'slug' => 'RO'],
            ['titulo' => 'Roraima', 'slug' => 'RR'],
            ['titulo' => 'Santa Catarina', 'slug' => 'SC'],
            ['titulo' => 'São Paulo', 'slug' => 'SP'],
            ['titulo' => 'Sergipe', 'slug' => 'SE'],
            ['titulo' => 'Tocantins', 'slug' => 'TO']
        ];

        foreach ($estados as $estado) {
            Uf::create($estado);
        }
    }
}
