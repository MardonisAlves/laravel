<?php

// Rotas do back-end 
Route::get( 'home', 'HomeController@index');
Route::get( 'modulo/updateUploads', 'HomeController@updateUploads');
Route::get( 'auth/register', 'HomeController@postResgister');
Route::get( 'Formproduto', 'FileController@Formproduto');


// Rotas do Front-end
Route::get( '/',    'WelcomeController@index');

Route::get('Filedelete/{id}',['as' =>'Filedelete','uses' => 'FileController@Delete']);





// Rotas de Autenticação
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

