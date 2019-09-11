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

Route::get('/', function () {return view('index');});
Route::get('estilo', 'AgendaController@estilo');
Route::get('funcoes', 'AgendaController@funcoes');
Route::get('lista', 'AgendaController@lista')->name('LISTA');
Route::get('criar', 'AgendaController@criar');
Route::post('agenda','AgendaController@store');
Route::get('show/{agenda}', 'AgendaController@show')->name('MOSTRAR');
Route::get('show/{agenda}/edit', 'AgendaController@edit')->name('EDITAR');
Route::get('show/{agenda}/del', 'AgendaController@del')->name('APAGAR');
Route::put('update/{agenda}', 'AgendaController@update')->name('ATUALIZAR');
Route::delete('destroy/{agenda}', 'AgendaController@destroy');
