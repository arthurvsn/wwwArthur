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
    return view('welcome');
});

Route::get('sistemaponto', function (){
    return view ('sistemaponto.index');
});
    
Route::get('/laddingpage', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleare' => 'web'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('/curriculo', 'CurriculosController@index');
    Route::get('editar', 'HomeController@editarUsuario');
    Route::get('registarnovousuario', 'HomeController@editarUsuario');
    
    Route::auth();

    //Rotas para os clientes que fiz teste
    Route::get('clientes', 'ClientesController@index');
    Route::get('clientes/novo', 'ClientesController@novo');
    Route::get('clientes/{cliente}/editar', 'ClientesController@editar');
    Route::post('clientes/salvar', 'ClientesController@salvar');
    Route::post('clientes/{cliente}', 'ClientesController@atualizar');
    Route::post('clientes/excluir/{cliente}', 'ClientesController@deletar'); 

    //Rotas Para o sistema de ponto
    Route::get('opcoes-ponto', 'OpcoesPontoController@index');
    Route::post('opcoes-ponto/salvar', 'OpcoesPontoController@save');

    Route::get('registro-ponto', 'RegistroPontoController@index');
});