<?php

use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function() {

    Route::prefix('admin')->group(function() {

        Route::namespace('Admin')->group(function() {
            
            Route::get('/dashboard', 'TesteController@teste')->name('admin.dashboard');
        
            Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');
            
            Route::get('/produtos', 'TesteController@teste')->name('admin.products');

            Route::get('/', 'TesteController@teste')->name('admin.home');

        });        
    });
});

Route::get('/produtos/{idProduct}', function ($idProduct = '') {
    return "Produtos(s) {$idProduct}";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos de categoria: {$flag}";
});

Route::match(['post', 'get'], '/match', function () {
    return 'match';
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});
