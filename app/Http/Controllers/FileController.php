<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fileupload;
use Illuminate\Http\Request;
use App\Produto;
use DB;
use Storage;

class FileController extends Controller {

	public function __construct(){

		$this->middleware('auth');
	}

	public function Formproduto(){
		
		return view('Formproduto');
	}

public function fileupload(Request $Request){
// pegando o nome da img com FILES
$filename = $_FILES['url_image']['name'];						 
$newfile = new Produto;
// movendo para o diretorio
$newfile->nome= $Request->file('url_image')->move(public_path().'/img',$filename);
$newfile->precocompra=$Request->precocompra;
$newfile->nome=$Request->nome;
$newfile->categoria=$Request->categoria;

$newfile->taxajuros=$Request->taxajuros;
// armazena o nome original no DB
$newfile->url_image=$filename;
$newfile->descricao=$Request->descricao;
$newfile->quantidade=$Request->quantidade;
$newfile->cor=$Request->cor;
$newfile->save();
// retornando query-eloquent do laravel e passando os arrays na view
			$Fileupload = produto::all();
			
								 return view('home',
								 	['Fileupload' => $Fileupload]);
								 
	}

	public function vendas(){
		echo "Vamos vender";
	}

public function getupdate($id){

							$Fileupload = Fileupload::find($id);

							return view('modulo/FormBannerUpdate',compact('Fileupload'));

	}
public function putupdate(Request $request,$id){
// pegando o nome do imagem 
$filename = $_FILES['imagem']['name'];
$imagem= $request->file('imagem')->move(public_path().'/img',$filename);
$newfile = Fileupload::find($id);
$newfile->title=$request->title;
$newfile->filename=$filename;
$newfile->ativo=$request->ativo;
$newfile->categoria=$request->categoria;
$newfile->descricao=$request->descricao;
$newfile->save();
							
$Fileupload = Fileupload::all();
			 return view('home',
					 	['Fileupload' => $Fileupload]);

					

	}
	public function Delete($id){

		$Fileupload = DB::table('fileuploads')->where('id','=',$id)->get();

		foreach ($Fileupload as $key => $name) {

			Storage::disk('local')->delete($name->filename);
			Fileupload::find($id)->delete();

		}
		
		

					$Filemodulo1 = DB::table('fileuploads')->where('categoria','=','Banner')->get();

					$Filemodulo2 = DB::table('fileuploads')->where('categoria','=','modulo1')->get();

					$Filemodulo3 = DB::table('fileuploads')->where('categoria','=','modulo2')->get();

					$Filemodulo4 = DB::table('fileuploads')->where('categoria','=','modulo3')->get();
					$Filemodulo4 = DB::table('fileuploads')->where('categoria','=','modulo4')->get();
	
		return view('home',
			['Fileupload' => $Fileupload,
			'Filemodulo1' => $Filemodulo1,
			'Filemodulo2' => $Filemodulo2,
			'Filemodulo3' => $Filemodulo3,
			'Filemodulo4' => $Filemodulo4]);

	}



}
