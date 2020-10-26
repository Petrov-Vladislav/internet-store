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

Route::get('/', 'CategoriesController@categories')->name('category');
Route::get('products', 'ProductsController@listProducts')->name('products');
Route::get('noutbooks', 'ProductsController@productNoutbooks')->name('noutbooks');
Route::get('monobloks', 'ProductsController@productMonobloks')->name('monobloks');
Route::get('naushniki', 'ProductsController@productNaushniki')->name('naushniki');
Route::post('addToCart', 'CartController@cart')->name('addToCart');
Route::get('cart', 'CartController@cart_user')->name('cart');

Route::post('delFromCart', 'CartController@delete_cart')->name('delFromCart');