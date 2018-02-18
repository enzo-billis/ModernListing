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

Route::get('/', 'TestController@index');
Route::post('/delete', 'TestController@remove');
Route::post('/', 'TestController@add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@index');


Route::post('/test/delete', 'TestController@remove');
Route::post('/test', 'TestController@add');