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

//Route::get('/', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/curriculo', function (){
    echo "Aqui vai estar o meu curriculo";
});

Route::get('/home', 'HomeController@index')->name('home');

//Rotas para os clientes que fiz teste
Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/novo', 'ClientesController@novoCliente');

//Rotas de autorização
Auth::routes();