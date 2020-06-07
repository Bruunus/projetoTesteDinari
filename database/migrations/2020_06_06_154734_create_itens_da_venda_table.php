<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensDaVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensDaVenda', function (Blueprint $table) {
            $table->increments('idItenDeVenda')
                ->autoIncrement()
                ->nullable($nulo = false);  
            $table->double('valorDoProduto');
            $table->integer('quantidadeVendida');
            $table->foreign('CadastroDeProduto')
                ->references('idProduto')
                ->on('itensDaVenda')
                ->onDelete('cascade');
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
        Schema::dropIfExists('itensDaVenda');
    }
}
