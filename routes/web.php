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

Route::get('/article', 'HomeController@index')->name('article_detail');
Route::get('/user','HomeController@User')->name('user_detail');

Route::get('/','HomeController@indexTest')->name('home');
Route::post('/them', 'HomeController@them')->name('them');

Route::get('/listusers', 'UserController@list')->name('list_user');
Route::post('/themuser', 'UserController@them')->name('them_user');
