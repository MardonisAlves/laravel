<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileupload extends Model {

	protected $fillable = ['title','imagem', 'filename', 'ativo','categoria','descricao'];

}
