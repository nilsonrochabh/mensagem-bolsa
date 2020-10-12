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


Route::get('/bolsa', 'App\Http\Controllers\BolsaAlunoController@index');
Route::get('/mensagem', 'App\Http\Controllers\BolsaMensagemController@index');

#Route::resource('', BolsaAlunoController::class);