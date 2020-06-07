<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroDeUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CadastroDeUsuario', function (Blueprint $table) {
            $table->increments('idCUsuario')
                ->autoIncrement()
                ->nullable($nulo = false);
            $table->bigInteger('CPF');
            $table->bigInteger('CNPJ');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CadastroDeUsuario');
    }
}
