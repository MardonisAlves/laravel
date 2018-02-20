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

$produtos = DB::table('produtos')->orderBy('precocompra','desc')->get();

$vendas = DB::table('vendas')
					->join('produtos' , function($join){
					$join->on('nome_produto', '=' , 'nome');
					})->orderBy('data_compra' , 'asc')->get();

/* SOMA de Lucro das Vendas */
$total_venda = DB::table('vendas')->orderBy('created_at')->sum('total_venda');

$zeroestoque = DB::table('produtos')->where('unidade', '=', 2)->get();


// DB::table('table_name')->distinct()->get(['column_name']);

 	
 	return view('home',compact('produtos','vendas','zeroestoque','total_venda'));

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
	
	// Atualizar produtos

	public function updateEditEstoque(Request $Request){
	

	produto::where('nome', 'Panela  de Pressao')
          ->update(['quantidade' => 4]);

	
	}

	public function insertvendas(Request $Request){
		// inserts vendas
		$vendas = new vendas();
		$vendas->nome_produto=$Request->nome_produto;
		$vendas->nome_cliente=$Request->nome_cliente;
		$vendas->nome_produto=$Request->nome_produto;
		$vendas->status=$Request->status;
		$vendas->quantidade=$Request->quantidade;
		$vendas->tipo_pagto=$Request->tipo_pagto;
		$vendas->parcelas=$Request->parcelas;
// Corrigir a porcetagem de juros aplicada nas vendas
	echo 'desconto'.'<br>'. $desconto =  $Request->total_venda * $Request->quantidade / 100 * $Request->desconto;
	echo $total =  $Request->total_venda * $Request->quantidade - $desconto;

		$vendas->total_venda=$total;
		$vendas->desconto=$Request->desconto;
		$vendas->data_compra = $Request->data_compra;
		$vendas->save();
	 
//update Estoque

$editEstoque = DB::table('produtos')
->where('nome', '=', $Request->nome_produto)->get();

			foreach ($editEstoque as $key => $value) {
				echo $estoque = $value->unidade - $Request->quantidade;
					if($estoque < 0){
						return redirect('vendas');
					}else{
					produto::where('nome', $Request->nome_produto)
          ->update(['unidade' => $estoque ]);
					}
}


			

// redirecionar para o form update vendas

$editvendas = DB::table('vendas')->where('nome_cliente' , '=', $Request->nome_cliente)->paginate(8);

          	return redirect('Getvendas');

			
	}


	public function Getvendas(Request  $Request){

		
			$editvendas = vendas::where('nome_cliente','like','%'.$Request->search.'%')
			->orderBy('nome_cliente')
			->where('status' , '=', 0)
			->paginate(10);

	return view('Getvendas',['editvendas' => $editvendas]);

		
	}


	public function postResgister()	{

		return view('auth/register');
	}



public function isertClientes(Request $Request){
	// verifica o request se o cliente ja esta cadastrado
	$tabclientes = DB::table('clientes')
	->where('nome', '=', $Request->nome)->get();

	foreach($tabclientes as $cad){
		if($cad->nome = $Request->nome){
			return view('Formcliente', ['name' => 'Cliente ja tem cadastro']);
		}
		

		
	}
	$cad = new Clientes();
	$cad->nome = $Request->nome;
	$cad->rua = $Request->rua;
	$cad->numero = $Request->numero;
	$cad->telefone = $Request->telefone;
	$cad->cidade = $Request->cidade;
	$cad->estado = $Request->estado;
	$cad->save();	
	return view('Formcliente', ['name' => 'Cadastrado com Sucesso']);	
		}
}

