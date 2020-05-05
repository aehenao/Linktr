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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/inicio', function(){
	return view('admin.index');
});


// Auth::routes();

Route::get('/links', 'LinkController@index');
Route::get('/links/new', 'LinkController@create');
Route::post('/links/create', 'LinkController@store');
Route::get('/links/{link}/edit', 'LinkController@edit');
Route::put('/links/{link}', 'LinkController@update');
Route::delete('/links/{link}', 'LinkController@destroy');

Route::get('/footers', 'FooterController@index');
Route::get('/footers/{id}/edit', 'FooterController@edit');
Route::put('/footers/{id}', 'FooterController@update');



//Route::get('/home', 'HomeController@index')->name('home');
