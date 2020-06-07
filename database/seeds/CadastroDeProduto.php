<?php

use Illuminate\Database\Seeder;

class CadastroDeProduto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CadastroDeProduto::create([
            'idProduto' =>  1,
            'descriçao' => 'produto01',
            'quantidadeEmEstoque' => 10,
            'dataDecadastro' => '01-05-2020'
        ]);
    }
}
