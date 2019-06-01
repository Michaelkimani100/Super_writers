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
Route::post('/contact/submit','MessagesController@submit');
Auth::routes();
Route::post('/login/custom',[
    'uses'=>'LoginController@login',
    'as'=>'login.custom'

]);

Route::group(['middleware'=>'auth'],function()
{
    Route::get('/writer/index','WriterController@index')->name('writer');
    Route::get('/admin/index','AdminController@home')->name('admin');
});
Route::get('logout', 'AdminController@logout');
Route::get('/admin/profile','AdminController@profile');
Route::resource('users','UsersController');
Route::resource('orders','OrdersController');
Route::resource('writer','WritersController');
Route::get('/admin/approvedusers','AdminController@approvedusers');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');
Route::post('store','UploadsController@store');
