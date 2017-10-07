<?php namespace App\Http\Controllers;

use App\email;
use App\Http\Controllers\Controller;
use App\Fileupload;
use App\Filemodulo;
use DB;
use Mail;
use Storage;
use App\clientes;
use App\vendas;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

	 
	public function __construct()
	{
	  		 					$this->middleware('auth');
	
	 }
	 
	public function index()	{
	$vendas = DB::table('vendas')->offset(10)->limit(5)->get();
	return view('home',['vendas' => $vendas]);
	}
	
	public function cad_cliente(){

	return view('Formcliente');
	}

	public function vendas(){
		// recuperando lista de clintes
		$clientes = DB::table('clientes')->get();
		// vender produtos

		return view('Formvenda',['clientes' =>  $clientes]);
	}

	public function insertvendas(Request $Request){
	
		$vendas = $Request->all();
		vendas::create($vendas);

		return redirect()->route('vendas');// redireciona para uma rota sem precisar passar novamente as variaveis

	}


	public function postResgister()	{
		return view('auth/register');
	}

	public function contato(){

		return view('contato/contato');
	}
public function isertClientes(Request $Request){


	$Clientes =  $Request->all();
	clientes::create($Clientes);


	return view('Formcliente');
}

	



	
	
}
