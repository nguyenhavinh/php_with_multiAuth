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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/careers', 'PagesController@careers');

Route::get('/customer', 'PagesController@customers');

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::resource('customerorders', 'CustomerOrdersController');

Route::resource('userorders', 'UserOrdersController');

Auth::routes();

Route::get('/admin', 'AdminController@index');