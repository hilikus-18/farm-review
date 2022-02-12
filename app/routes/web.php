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

Route::get('/', 'App\Http\Controllers\TopController@index');
Route::get('/farm/list', 'App\Http\Controllers\FarmController@index');
Route::get('/review/list', 'App\Http\Controllers\ReviewController@index');
Route::get('/content/list', 'App\Http\Controllers\ContentController@index');
Route::get('/tip/list', 'App\Http\Controllers\TipController@index');
Route::get('/mypage', 'App\Http\Controllers\MypageController@index');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->middleware('auth')->name('logout');
