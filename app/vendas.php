<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    protected $fillable = ['nome_cliente','status','total_vendas','desconto','data_compra'];
}
