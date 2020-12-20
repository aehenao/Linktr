<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/register', function(){
	return redirect('/');
});

Route::get('/url/{id}', 'UrlController@enlace');
Route::get('/footer/{id}', 'UrlController@footer');
Route::get('/direct/{alias}', 'UrlController@direct');




Auth::routes(['register' => false]);

Route::middleware('auth')->group(function() {
Route::get('/home', 'DashboardController@index');
Route::get('/inicio','DashboardController@index')->name('home');

Route::get('/profile', 'ProfileController@index');
Route::put('/profile/{id}', 'ProfileController@update');

Route::get('/links', 'LinkController@index');
Route::get('/links/new', 'LinkController@create');
Route::post('/links/create', 'LinkController@store');
Route::get('/links/{link}/edit', 'LinkController@edit');
Route::put('/links/{link}', 'LinkController@update');
Route::delete('/links/{link}', 'LinkController@destroy');

// RUTAS PARA LA GENERACION DE ENLACES DIRECTOS
Route::get('/link-directo', 'EnlacesDirectosController@index');
Route::get('/link-directo/crear', 'EnlacesDirectosController@vistaCrear');
Route::post('/link-directo/crear', 'EnlacesDirectosController@store');
Route::get('/link-directo/editar/{id}', 'EnlacesDirectosController@vistaEditar');
Route::put('/link-directo/editar/{id}', 'EnlacesDirectosController@update');
Route::delete('/link-directo/eliminar/{id}', 'EnlacesDirectosController@destroy');




Route::get('/footers', 'FooterController@index');
Route::get('/footers/{id}/edit', 'FooterController@edit');
Route::put('/footers/{id}', 'FooterController@update');
});

