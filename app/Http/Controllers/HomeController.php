<?php namespace App\Http\Controllers;

use App\email;
use App\Http\Controllers\Controller;
use App\Fileupload;
use App\Filemodulo;
use DB;
use Mail;
use Storage;
use Illuminate\Http\Request;

class HomeController extends Controller {

	 
	public function __construct()
	{
	  		 					$this->middleware('auth');
	
	 }
	 
	public function index()	{

	return view('home');
	}
	

	public function postResgister()	{
		return view('auth/register');
	}
	public function contato(){
		return view('contato/contato');
	}

	



	
	
}
