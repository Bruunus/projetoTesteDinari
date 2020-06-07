<?php

use Illuminate\Database\Seeder;

class CadastroDeUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CadastroDeUsuario::create([
            'idCUsuario' =>  1,
            'CPF' => 54784765598,
            'CNPJ' => 48792154798624,
        ]);
    }
}
