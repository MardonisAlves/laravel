<?php

// Rotas do back-end 
Route::get( 'home', 'HomeController@index');
Route::get( 'modulo/updateUploads', 'HomeController@updateUploads');
Route::get( 'auth/register', 'HomeController@postResgister');
Route::get( 'Formproduto', 'FileController@Formproduto');

Route::post('cadproduto','FileController@fileupload');

Route::get('vendas','HomeController@vendas')->name('vendas');
Route::post('insertvendas','HomeController@insertvendas');
Route::get('cad_cliente','HomeController@cad_cliente');
Route::post('isertClientes','HomeController@isertClientes');


// Rotas do Front-end
Route::get( '/',    'WelcomeController@index');
Route::get( '/',    'WelcomeController@getupload');
Route::get('Auth/login','WelcomeController@login');




// Rotas de Autenticação
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
