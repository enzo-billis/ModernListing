<?php

use App\Produit;

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

Route::get('/', 'TestController@index')->middleware('auth');
Route::post('/delete', 'TestController@remove')->middleware('auth');
Route::post('/', 'TestController@add')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/test', 'TestController@index')->middleware('auth');


Route::post('/test/delete', 'TestController@remove')->middleware('auth');
Route::post('/test', 'TestController@add')->middleware('auth');