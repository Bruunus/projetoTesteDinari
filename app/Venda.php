<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['idVenda','somaDeProdutosVendidos','dataDeFinalizaçaoDeVenda'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function itensVenda()
    {
        return $this->hasMany('App\Venda');
    }
}
