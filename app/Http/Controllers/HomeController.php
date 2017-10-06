<?php namespace App\Http\Controllers;

use App\email;
use App\Http\Controllers\Controller;
use App\Fileupload;
use App\Filemodulo;
use DB;
use Mail;
use Storage;
use App\clientes;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

	 
	public function __construct()
	{
	  		 					$this->middleware('auth');
	
	 }
	 
	public function index()	{

	return view('home');
	}
	
	public function cad_cliente(){

	return view('Formcliente');
	}

	public function vendas(){

		$clientes = DB::table('clientes')->get();

		return view('Formvenda',['clientes' =>  $clientes]);
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
