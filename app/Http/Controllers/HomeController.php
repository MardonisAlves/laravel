<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Storage;
use App\Clientes;
use App\vendas;
use App\Produto;

use Illuminate\Http\Request;

class HomeController extends Controller {

	 
	public function __construct()
	{
	  		 					$this->middleware('auth');
	
	 }
	 
public function index()	{

$produtos = Produto::all();
$vendas = vendas::all();


			/*$search = \Request::get('search');
			$offices = vendas::where('nome_cliente','like','%'.$search.'%')
			->orderBy('nome_cliente')
			->paginate(2);*/
 
 	return view('home',compact('produtos','vendas'));

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
	// verifica o request se o cliente ja esta cadastrado
	$tabclientes = DB::table('clientes')->where('nome', '=', $Request->nome)->get();

	foreach($tabclientes as $cad){
		if($cad->nome = $Request->nome){
			return view('Formcliente', ['name' => 'Cliente ja tem cadastro']);
		}else{
			$cad = new Clientes();
			$cad->nome = $Request->nome;
			$cad->rua = $Request->rua;
			$cad->numero = $Request->numero;
			$cad->telefone = $Request->telefone;
			$cad->cidade = $Request->cidade;
			$cad->estado = $Request->estado;
			$cad->save();
		}

		
	}
		
	return view('Formcliente', ['name' => 'Cadastrado com Sucesso']);	
		}
}

