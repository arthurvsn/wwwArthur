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

Route::get('/laddingpage', function () {
    return view('welcome');
});

Route::get('/curriculo', 'CurriculosController@index');

Route::get('/sistemaponto', function (){
    return view ('sistemaponto.index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleare' => 'web'], function(){
    Route::get('/', 'HomeController@index');
    Route::auth();

    //Rotas para os clientes que fiz teste
    Route::get('clientes', 'ClientesController@index');
    Route::get('clientes/novo', 'ClientesController@novo');
    Route::post('clientes/salvar', 'ClientesController@salvar');

});



//Rotas de autorização
//Auth::routes();
//Gambiarra para o logout funcionar
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');