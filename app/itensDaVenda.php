<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itensDaVenda extends Model
{
    protected $fillable = ['idItenDeVenda','valorDoProduto','quantidadeVendida','CadastroDeProduto'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function itensVenda()
    {
        return $this->hasMany('App\itensDaVenda');
    }
}
