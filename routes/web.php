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
Route::get('/cadastro/empreendimento', 'FundiarioController@empreendimento');
Route::get('/cadastro/propriedade', 'FundiarioController@propriedade');
Route::post('/cadastro/cadastraPropriedade', 'FundiarioController@cadastraPropriedade');
Route::get('/cadastro/proprietario', 'FundiarioController@proprietario');
Route::get('/teste', 'FundiarioController@teste');
Route::get('/cadastro/cartorio', 'FundiarioController@cartorio');