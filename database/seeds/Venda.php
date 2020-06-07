<?php

use Illuminate\Database\Seeder;

class Venda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Venda::create([
            'idVenda' =>  1,
            'somaDeProdutosVendidos' => $somaProduto,
            'dataDeFinalizaçaoDeVenda' => '01-05-2020'
        ]);
    }
}
