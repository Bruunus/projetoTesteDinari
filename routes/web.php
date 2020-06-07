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

Route::group(array('prefix' => 'api'), function()
{

    Route::get('/', function(){
        return response()->json(['message' => 'Jobs API','status' => 'Connected']);
    });

    Route::resource('cadastro_de_produto', 'ProdutoController');
    Route::resource('cadastro_de_usuario', 'CadastroUsuarioController');
    Route::resource('itens_de_venda', 'itensController');
    Route::resource('venda', 'vendaController');
});


Route::get('/', function () {
    return redirect('api');
});


Route::get('admin/profile', function () {
    // Protected route
})->middleware('auth');

