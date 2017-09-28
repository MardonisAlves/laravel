<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome')->unique();
            $table->string('precocompra');
            $table->string('taxajuros');
            $table->string('url_image');
            $table->text('descricao');
            $table->string('quantidade');
            $table->string('cor');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
       
}
