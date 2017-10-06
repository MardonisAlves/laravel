<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    protected $fillable = ['nome_produto','nome_cliente','status','total_venda','desconto','data_compra'];
}
