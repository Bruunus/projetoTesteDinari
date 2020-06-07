<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Venda', function (Blueprint $table) {
            $table->increments('idVenda')
                ->autoIncrement()
                ->nullable($nulo = false);
            $table->double('somaDeProdutosVendidos');
            $table->date('dataDeFinalizaçaoDeVenda');
            $table->foreign('CadastroDeUsuario')
                ->references('idCUsuario')
                ->on('Venda')
                ->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Venda');
    }
}
