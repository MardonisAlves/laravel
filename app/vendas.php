<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    protected $fillable = ['nome_produto',
    'nome_cliente','status',
    'quantidade','tipo_pagto','parcelas','total_venda',
    'desconto','data_compra'];
}
