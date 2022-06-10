<?php

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

Route::get('/', function () {
    return view('contatoView');
});
Route::post('/contato/inserir','ContatoController@store');
Route::get('/contato','ContatoController@index');
Route::get('/contato-view{id}','ContatoController@destroy');

Route::get('/home', function () {
    return view('home');
});