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

Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/category/{category}', 'MainController@category')->name('category');
Route::get('/product/{product}', 'MainController@product')->name('product');

Route::get('/basket', 'MainController@product')->name('basket');
Route::get('/basket.place', 'MainController@productPlace')->name('basket-place');

