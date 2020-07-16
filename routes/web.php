<?php

use Illuminate\Support\Facades\Route;

Route::any('products/search', 'ProductController@search')->name('products.search');
Route::resource('/products', 'ProductController');

/*
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
Route::post('products', 'ProductController@store')->name('products.store');
*/

Route::get('login', function() {
    return 'Login';
})->name('login');


// Route::middleware([])->group(function() {

//     Route::prefix('admin')->group(function() {

//         Route::namespace('Admin')->group(function() {
            
//             Route::get('/dashboard', 'TesteController@teste')->name('admin.dashboard');
        
//             Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');
            
//             Route::get('/produtos', 'TesteController@teste')->name('admin.products');

//             Route::get('/', 'TesteController@teste')->name('admin.home');

//         });        
//     });
// });

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
