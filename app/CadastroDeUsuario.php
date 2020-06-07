<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroDeUsuario extends Model
{
    protected $fillable = ['idCUsuario','CPF','CNPJ'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

    public function cadastroUsuario()
    {
        return $this->hasMany('App\CadastroDeUsuario');
    }
}
