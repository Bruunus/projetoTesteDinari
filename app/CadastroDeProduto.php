<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroDeProduto extends Model
{
    protected $fillable = ['idProduto','descriçao','quantidadeEmEstoque','dataDecadastro'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function cadastroProduto()
    {
        return $this->hasMany('App\CadastroDeProduto');
    }
}
