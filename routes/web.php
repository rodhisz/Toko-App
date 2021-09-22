<?php

use App\Http\Controllers\tokoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('toko', tokoController::class);

Route::get('/','App\Http\Controllers\tokoController@home') -> name('home');
Route::get('/detail','App\Http\Controllers\tokoController@detail') -> name('detail');
Route::get('/cart','App\Http\Controllers\tokoController@cart') -> name('cart');
Route::get('/checkout','App\Http\Controllers\tokoController@checkout') -> name('checkout');
