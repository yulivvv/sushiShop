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



Route::get('/', 'App\Http\Controllers\MainController@index');

Route::get('/{category}', 'App\Http\Controllers\MainController@category');

Route::get('/{sushirolls?}', 'App\Http\Controllers\MainController@sushirolls');
// Route::get('/sets', 'App\Http\Controllers\MainController@sets');
// Route::get('/pizzas', 'App\Http\Controllers\MainController@pizzas');
// Route::get('/hotdishes', 'App\Http\Controllers\MainController@hotdishes');
// Route::get('/drinks', 'App\Http\Controllers\MainController@drinks');







