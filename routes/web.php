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


Route::get('/','ProductController@index')->name('index');
Route::get('/cart','CartController@show')->name('cart');
Route::post('/add/{id}','CartController@add')
    ->where('id','[0-9]+')
    ->name('add');
Route::post('/auth', 'UserController@registration')
    ->name('reg');
Route::get('/logout', 'UserController@logout')
    ->name('logout');
Route::post('/search','SearchController@search')
    ->name('search');        
