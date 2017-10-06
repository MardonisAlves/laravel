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
        $table->foreign('nome_cliente')->reference('nome')->on('clientes');
        $table->boolean('status');
        $table->string('total_venda');
        $table->string('desconto');
        $table->date('data_compra');
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
