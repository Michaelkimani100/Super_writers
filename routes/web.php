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
Route::get('/', 'PagesController@getHome');
Route::get('/writer/index', 'PagesController@getdashboardHome');
Route::get('/writer/reg', 'PagesController@getReg');

Route::post('/contact/submit','MessagesController@submit');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');
