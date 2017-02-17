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

Route::get('start', 'StartController@start');

Route::get('shops', 'ShopController@index');
Route::get('shopitems/{id}', 'ShopController@shopitems');
Route::get('items', 'ShopController@items');

Route::get('start/{id}', 'StartController@item');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index');

