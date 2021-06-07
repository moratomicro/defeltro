<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
* Exemplos de rotas
Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function(){
    Route::get('/', function(){
        return 'Dashboard';
    });
    Route::get('/users', function(){
        return 'Controle de Users';
    });
    Route::get('/financeiro', function(){
        return 'Painel de Financeiro';
    });
});

Route::get('/produto/{id?}', function($id=null){
    return "Posts do produto {$id}";
});

Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('/site', 'App\Http\Controllers\Site\SiteController');

Route::resource('/painel', 'App\Http\Controllers\Painel\PainelController');

Route::resource('/produto', 'App\Http\Controllers\Painel\ProdutoController');

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
