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

Route::get('/', function () {
    return view('welcome');
});

Route::get('start', 'StartController@index');
Route::get('start/{id}', 'StartController@getUserById');
Route::get('file-list', 'FileController@getList');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('shops', 'ShopController@index')->name('home');
Route::get('shopItems/{id}', 'ShopController@shopItems')->name('shop');
Route::post('addItem', 'ShopController@addItem');
Route::post('deleteItem', 'ShopController@deleteItem');
