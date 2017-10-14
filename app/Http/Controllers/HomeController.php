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
use App\Produto;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Khill\Lavacharts\Lavacharts;

class HomeController extends Controller {

	 
	public function __construct()
	{
	  		 					$this->middleware('auth');
	
	 }
	 
public function index()	{

$produtos = Produto::all();


			$search = \Request::get('search');
			$offices = vendas::where('nome_cliente','like','%'.$search.'%')
			->orderBy('nome_cliente')
			->paginate(2);
 
 	return view('home',compact('offices','produtos'));

	}
	
	public function cad_cliente(){

	return view('Formcliente');
	}

	public function vendas(){
		// recuperando lista de clintes
		$clientes = DB::table('clientes')->get();
		$produtos = DB::table('produtos')->get();
		// vender produtos

		return view('Formvenda',['clientes' =>  $clientes,'produtos' => $produtos]);
	}

	public function insertvendas(Request $Request){
		
		$vendas = new vendas();
		$vendas->nome_produto=$Request->nome_produto;
		$vendas->nome_cliente=$Request->nome_cliente;
		$vendas->nome_produto=$Request->nome_produto;
		$vendas->status=$Request->status;
		$vendas->quantidade=$Request->quantidade;
		$vendas->tipo_pagto=$Request->tipo_pagto;
		$vendas->parcelas=$Request->parcelas;

		$desconto =  $Request->total_venda * $Request->quantidade / 100 * $Request->desconto;
		$total =  $Request->total_venda * $Request->quantidade - $desconto;

		$vendas->total_venda=$total;
		$vendas->desconto=$Request->desconto;
		$vendas->data_compra = $Request->data_compra;
		$vendas->save();
		return redirect()->route('home');// redireciona para uma rota sem precisar passar novamente as variaveis

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
