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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//

Route::resource('citys', 'Admin\\CitysController')->middleware('auth');

Route::resource('items', 'Admin\\ItemsController')->middleware('auth');
Route::resource('admin/orders', 'Admin\\OrdersController')->middleware('auth');
Route::resource('rejects', 'Admin\\RejectsController')->middleware('auth');
