<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vendas',function(Blueprint $table){
        $table->increments('id');
        $table->timestamps();
        $table->string('nome_produto');
        $table->string('nome_cliente');
        $table->foreign('nome_cliente')->references('nome')->on('clientes')->onUpdate('cascade');
        $table->boolean('status');
        $table->string('total_venda');
        $table->string('desconto');
        $table->string('data_compra');
      }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendas');
    }
}
