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

Route::get('/', function () {
    return redirect('login');
});

// custom auth
Route::get('login', 'App\Http\Controllers\CustomAuthController@index')->name('login');
Route::post('custom-login', 'App\Http\Controllers\CustomAuthController@customLogin')->name('login.custom');
Route::get('dashboard', 'App\Http\Controllers\CustomAuthController@dashboard');  
Route::get('registration', 'App\Http\Controllers\CustomAuthController@registration')->name('register-user');
Route::post('custom-registration', 'App\Http\Controllers\CustomAuthController@customRegistration')->name('register.custom'); 
Route::get('signout', 'App\Http\Controllers\CustomAuthController@signOut')->name('signout');

// pages routes
Route::resource('products', 'App\Http\Controllers\ProductsController')->middleware('auth');
Route::resource('users', 'App\Http\Controllers\UsersController')->middleware('auth');
Route::resource('orders', 'App\Http\Controllers\OrdersController')->middleware('auth');

// warehouse operations routes
Route::get('warehouse/orders', 'App\Http\Controllers\WarehouseController@orders');
Route::put('warehouse/orders/{id}', 'App\Http\Controllers\WarehouseController@update');
// decrement quantity route
Route::post('products/decrement/{id}', 'App\Http\Controllers\WarehouseController@decrementQuantity');