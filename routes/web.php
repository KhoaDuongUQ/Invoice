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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

Route::get('/changepassword', 'Auth\ChangePasswordController@showChangePasswordForm')->name('changepassword');
Route::post('/updatepassword', 'Auth\ChangePasswordController@updatePassword')->name('updatepassword');

Route::resource('users', 'UserController')->only([
    'show', 'edit', 'update'
]);

Route::get('/orders/create', 'OrderController@create')->name('orders.create');

Route::resources([
  'users.stores' => 'StoreController',
  'stores.items' => 'ItemController'
]);


Auth::routes(['verify' => true]);
