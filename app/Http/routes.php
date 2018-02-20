<?php

// Rotas do back-end 
Route::get( 'home', 'HomeController@index')->name('home');
Route::get( 'modulo/updateUploads', 'HomeController@updateUploads');
Route::get( 'auth/register', 'HomeController@postResgister');
Route::get( 'Formproduto', 'FileController@Formproduto');

Route::post('cadproduto','FileController@fileupload')->name('Formprodutos');

Route::get('vendas','HomeController@vendas')->name('vendas');
Route::post('insertvendas','HomeController@insertvendas');

Route::get('Getvendas','HomeController@Getvendas');

Route::post('updateEditEstoque','HomeController@updateEditEstoque');

Route::get('cad_cliente','HomeController@cad_cliente');
Route::post('isertClientes','HomeController@isertClientes');
Route::get('/getPrecoProdutos','HomeController@getPrecoProdutos');


// Rotas do Front-end
Route::get( '/',    'WelcomeController@index');
Route::get( '/',    'WelcomeController@getupload');
Route::get('Auth/login','WelcomeController@login');




// Rotas de Autenticação
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
