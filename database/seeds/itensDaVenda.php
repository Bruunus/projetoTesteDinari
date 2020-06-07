<?php

use Illuminate\Database\Seeder;

class itensDaVenda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\itensDaVenda::create([
            'idItenDeVenda' =>  1,
            'valorDoProduto' => 100.00,
            'quantidadeVendida' => 10,
            'CadastroDeProduto' => '01-05-2020'
        ]);
    }
}
