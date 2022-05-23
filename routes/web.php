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

Route::get('/test', 'HoangController@test')->name('test');
Route::post('/themtest', 'HoangController@themtest')->name('them_test');

Route::get('/bangcuuchuong', 'HoangController@bangcuuchuong')->name('bang_cuu_chuong');

Route::get('/tinhdientich', 'HoangController@tinhdientich')->name('tinh_dien_tich');

Route::get('/tinhchuvi', 'HoangController@tinhchuvi')->name('tinh_chu_vi');

Route::get('/chuvihinhvuong', 'HoangController@chuvihinhvuong')->name('chu_vi_hv');
