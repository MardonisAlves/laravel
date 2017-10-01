<?php

// Rotas do back-end 
Route::get( 'home', 'HomeController@index');
Route::get( 'modulo/updateUploads', 'HomeController@updateUploads');
Route::get( 'auth/register', 'HomeController@postResgister');
Route::get( 'Formproduto', 'FileController@Formproduto');
Route::post('cadproduto','FileController@fileupload');
Route::get('vendas','FileController@vendas');
Route::get('cad_cliente','HomeController@cad_cliente');

// Rotas do Front-end
Route::get( '/',    'WelcomeController@index');
Route::get( '/',    'WelcomeController@getupload');





// Rotas de Autenticação
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

