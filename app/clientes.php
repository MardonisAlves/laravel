<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
      protected $fillable = [
        'nome','rua','numero','telefone','cidade','estado'
    ];
}
