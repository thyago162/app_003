<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'App\Adm'], function () {
    Route::resource('produtos', 'ProdutoController', ['except' => ['edit']]);
    Route::resource('pedidos', 'PedidoController', ['except' => ['edit']]);
});

Route::group(['namespace' => 'App\Cliente'], function () {
    Route::resource('clientes', 'ClienteController', ['except' => ['edit']]);
});
