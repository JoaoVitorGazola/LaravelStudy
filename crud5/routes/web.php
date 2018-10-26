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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes', 'ClienteController@index')->middleware('verified');
Route::get('/clientes/novo', 'ClienteController@novo')->middleware('verified');
Route::get('/clientes/{cliente}/editar', 'ClienteController@editar')->middleware('verified');
Route::post('/clientes/novo/salvar', 'ClienteController@salvar')->middleware('verified');
Route::patch('/clientes/editar/{cliente}', 'ClienteController@atualizar')->middleware('verified');
Route::get('/clientes/deletar/{cliente}', 'ClienteController@deletar')->middleware('verified');

Route::get('/compras', 'ComprasController@index')->middleware('verified');
Route::get('/compras/{cliente}/registrar', 'ComprasController@registrar')->middleware('verified');;
Route::post('/compras/salvar', 'ComprasController@salvar')->middleware('verified');
Route::get('/compras/deletar/{compra}', 'ComprasController@deletar')->middleware('verified');
