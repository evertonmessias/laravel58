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

Route::get('/', function () {return view('welcome');});
Route::get('estilo', 'AgendaController@estilo');
Route::get('funcoes', 'AgendaController@funcoes');
Route::get('lista', 'AgendaController@lista');
Route::get('criar', 'AgendaController@criar');
Route::get('show/{agenda}/edit', 'AgendaController@edit');
Route::post('agenda','AgendaController@store');
Route::get('show/{agenda}', 'AgendaController@show');
Route::put('update/{agenda}', 'AgendaController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
