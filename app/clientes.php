<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
      protected $fillable = [
        'nome','rua','numero','telefone','cidade','estado'
    ];
}
