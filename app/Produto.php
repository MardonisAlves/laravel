<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome', 'precocompra', 
        'taxajuros','url_image',
        'descricao',
        'quantidade',
        'cor'
    ];
}
