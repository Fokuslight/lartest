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

Route::get('/', 'MainController@index')->name('main');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{category}', 'ShopController@category')->name('shop.category');
Route::get('/shop/{category}/{product}', 'ShopController@show')->name('shop.category.show');


Route::get('/cart', 'CartController@index')->name('cart.index');
Route::put('/cart/{product}', 'CartController@update')->name('cart.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
