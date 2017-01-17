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
    return view('auth.login');
});
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index');
//cadastro de empreendimento
Route::get('/cadastro/empreendimento', 'FundiarioController@empreendimento');
Route::post('/cadastro/cadastraEmpreendimento', 'FundiarioController@cadastraEmpreendimento');
//cadastro de propriedades
Route::get('/cadastro/propriedade', 'FundiarioController@propriedade');
Route::post('/cadastro/cadastraPropriedade', 'FundiarioController@cadastraPropriedade');
//cadastro de proprietarios
Route::get('/cadastro/proprietario', 'FundiarioController@proprietario');
Route::post('/cadastro/cadastraProprietario', 'FundiarioController@cadastraProprietario');
//teste conexão com o banco de dados
Route::get('/teste', 'FundiarioController@teste');
//cadastro de cartório
Route::get('/cadastro/cartorio', 'FundiarioController@cartorio');
Route::post('/cadastro/cadastraCartorio', 'FundiarioController@cadastraCartorio');
//relacionar proprietário com propriedade
Route::get('/cadastro/propriedadeProprietario', 'FundiarioController@propriedadeProprietario');